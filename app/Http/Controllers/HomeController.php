<?php

namespace App\Http\Controllers;

use App\Models\CustomerScratchcard;
use App\Models\LotteryDraw;
use App\Models\LotteryWinners;
use App\Models\Syslog;
use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\PaymentProfile;
use App\Models\CustomerPayment;
use App\Models\Customer;

use Auth;
use Crypt;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $logs = Syslog::where('user_id',$user_id)->orderBy('created_at','desc')->take(5)->get();

        //if user is admin
        if(Auth::user()->hasRole('admin')) {
            $customers = Customer::count();
            $payouts = CustomerPayment::sum('amount');
            $draws = LotteryDraw::count();
            $winners = LotteryWinners::count();
            $scratch_cards = CustomerScratchcard::count();
            $customer_payments= CustomerPayment::orderBy('created_at','desc')->take(5)->get();
            //end user is admin
            return view('home',[
                'customers'=> $customers,
                'payouts' => $payouts,
                'draws' => $draws,
                'winners' => $winners,
                'scratch_cards' => $scratch_cards,
                'customer_payments'=>$customer_payments,
                'logs'=>$logs
            ]);
        }else{
            //if user is customer
            $customer_id = Customer::where('user_id', $user_id)->first();
            $payment_total = CustomerPayment::where('user_id', $user_id)->sum('amount');
            //DB::enableQueryLog();
            $dat = DB::table("users")
                ->select(DB::raw("SUM(winning_amount) as total_winnings"))
                ->leftjoin('customer_scratchcards','customer_scratchcards.user_id','=','users.id')
                ->leftjoin("lottery_winners","lottery_winners.customer_scratchcard_id","=","customer_scratchcards.id")
                ->where("users.id",$user_id)
                ->get();
            //dd(DB::getQueryLog());


            $winning_total = $dat[0]->total_winnings;


            $customer_payments= CustomerPayment::where('user_id', $user_id)->orderBy('created_at','desc')->take(5)->get();
            $customer_tickets = CustomerScratchcard::where('user_id', $user_id)->count();
            $referrals = 0;
            //dd($customer_payments);
            //dd($customer_tickets);
            //end user is customer
            return view('home',[
                'payments'=>$payment_total,
                'customer_payments'=>$customer_payments,
                'tickets'=>$customer_tickets,
                'referrals'=>$referrals,
                'winnings'=>$winning_total,
                'logs'=>$logs
            ]);
        }



    }

    public function profile()
    {
        return view('profile');
    }

    public function editProfile(Request $request){
        $user = Auth::user();
        $image_url = '';

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('profiles'), $imageName);
            $image_url = 'profiles/'.$imageName;
        }

        if($profile=$user->profile){
            $profile->first_name = $request->input('first_name');
            $profile->last_name = $request->input('last_name');
            $profile->phone_number = $request->input('phone_number');
            $profile->address_line1 = $request->input('address_line1');
            $profile->address_line2 = $request->input('address_line2');
            if($image_url){
                $profile->image_url = $image_url;
            }
            $profile->save();
        }else{
            $profile = Profile::create([
                'first_name'=>$request->input('first_name'),
                'last_name'=>$request->input('last_name'),
                'email'=>$request->input('email'),
                'phone_number'=>$request->input('phone_number'),
                'address_line1'=>$request->input('address_line1'),
                'address_line2'=>$request->input('address_line2'),
                //'sex'=>$data['sex'],
                'user_id'=>$user->id,
            ]);
            if($image_url){
                $profile->image_url = $image_url;
            }
            $profile->save();
        }
        if($request->input('password')){
            $user->password = bcrypt($request->input('password'));
            $user->save();
        }
        Syslog::create([
            'user_id'=> Auth::user()->id,
            'log_type'=>'Profile edit',
            'activity'=>'Profile was edited',
            'user_ip'=>$request->getClientIp()
        ]);
        return redirect()->route('profile');

    }

    public function editPaymentProfile(Request $request){
        $user = Auth::user();
        if($profile=$user->paymentProfile){
            $profile->preferred_bank_account_number = Crypt::encrypt($request->input('preferred_bank_account_number'));
            $profile->preferred_bank_account_name = ($request->input('preferred_bank_account_name'));
            $profile->preferred_bank_name = Crypt::encrypt($request->input('preferred_bank_name'));
            $profile->means_of_identification = $request->input('means_of_identification');
            $profile->id_card_number = Crypt::encrypt($request->input('id_card_number'));
            $profile->id_expiry_date = Crypt::encrypt($request->input('id_expiry_date'));
            $profile->save();
        }else{
            $profile = PaymentProfile::create([
                'preferred_bank_account_number'=>Crypt::encrypt($request->input('preferred_bank_account_number')),
                'preferred_bank_account_name'=>Crypt::encrypt($request->input('preferred_bank_account_name')),
                'preferred_bank_name'=>Crypt::encrypt($request->input('preferred_bank_name')),
                'means_of_identification'=>$request->input('means_of_identification'),
                'id_card_number'=>Crypt::encrypt($request->input('id_card_number')),
                'id_expiry_date'=>Crypt::encrypt($request->input('id_expiry_date')),
                'user_id'=>$user->id,
            ]);
        }
        Syslog::create([
            'user_id'=> Auth::user()->id,
            'log_type'=>'Payment Profile edit',
            'activity'=>'Payment Profile was edited',
            'user_ip'=>$request->getClientIp()
        ]);
        return redirect()->route('profile');
    }
}
