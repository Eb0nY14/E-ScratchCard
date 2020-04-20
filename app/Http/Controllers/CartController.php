<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CustomerScratchcard;
use App\Models\LotteryDraw;
use App\Models\Syslog;
use App\Models\CustomerPayment;
use Illuminate\Http\Request;

use Auth;


use Srmklive\PayPal\Services\ExpressCheckout;

class CartController extends Controller
{

    public function cart(Request $request)
    {
        $draw_id = $request->input('draw_id');
        $draw = LotteryDraw::find($draw_id);
        $cards = $request->input('card');
        $amount = $request->input('total');



        //dd($cards);

        return view('cart', ['cards' => $cards, 'amount' => $amount, 'draw' => $draw]);
    }

    public function processCartPaypal(Request $request)
    {
        /*$data = [];

        $data['items'] = [
            [
                'name' => 'qlotto',
                'price' => $request->input('amount'),
                'desc' => 'Payment for lotto Scratchcards',
                'qty' => 1
            ]
        ];
        $data['invoice_id'] = time() . $request->input('draw_id');
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('paypalPayment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 100;
        $provider = new ExpressCheckout;
        //$response = $provider->setExpressCheckout($data);
        //$response = $provider->setExpressCheckout($data, true);

        //return redirect($response['paypal_link']);*/

        //assume paid and save
        $payment =CustomerPayment::create([
            'user_id'=>Auth::user()->id,
            'payment_date'=>now(),
            'status'=>'Approved',
            'reference'=>time() . $request->input('draw_id'),
            'amount'=>$request->input('amount'),
            'mode_of_payment'=>'Paypal',
        ]);

        $draw_id = $request->input('draw_id');
        $draw = LotteryDraw::find($draw_id);
        $cards = $request->input('card');

        foreach($cards as $c){
            $nums = explode(',',$c);
            CustomerScratchcard::create([
                'user_id'=>Auth::user()->id,
                'n1'=>$nums[0],
                'n2'=>$nums[1],
                'n3'=>$nums[2],
                'n4'=>$nums[3],
                'n5'=>$nums[4],
                'n6'=>$nums[5],
                'lottery_draw_id'=>$draw->id,
                'payment_id'=>$payment->id,
                'status'=>'Approved'
            ]);
        }



        //customer payment table
         Syslog::create([
            'user_id'=> Auth::user()->id,
            'log_type'=>'Scratchcard Purchase',
            'activity'=>'Customer successfully purchased and entered scratchcards',
            'user_ip'=>$request->getClientIp()
        ]);

        return redirect()->route('home');
    }

    public function paypalSuccess(Request $request)
    {
        $response = $provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successfully. You can create success page here.');
        }

        dd('Something is wrong.');
    }

    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
}
