<?php

namespace App\Http\Controllers;

use App\Models\CustomerScratchcard;
use App\Models\LotteryWinners;
use Illuminate\Http\Request;
use App\Models\LotteryDraw;
use DB;

class DrawController extends Controller
{
    public function index()
    {

    }

    public function generateWinningNumber($draw_id)
    {
        $draw = LotteryDraw::find($draw_id);
        if($draw->status!='open'){
            return view('error',['error_message'=>'Draw already concluded for the Lottery draw.']);
            die();
        }
        $winning_numbers_arr = $this->secureGenerate();
        $reg = $winning_numbers_arr['regular_nums'];
        $bonus = $winning_numbers_arr['bonus_nums'];
        $winning_numbers = $reg[0].','.$reg[1].','.$reg[2].','.$reg[3].','.$reg[4].','.$bonus[0];

        $arr_in = [];
        array_push($arr_in,$reg[0]);
        array_push($arr_in,$reg[1]);
        array_push($arr_in,$reg[2]);
        array_push($arr_in,$reg[3]);
        array_push($arr_in,$reg[4]);
        array_push($arr_in,$bonus[0]);

        //DB::enableQueryLog();
        $results = DB::select( DB::raw("select id, n1, n2, n3, n4, n5, n6, ((n1 IN (:arr1)) + (n2 IN (:arr2)) + (n3 IN (:arr3)) + (n4 IN (:arr4)) + (n5 IN (:arr5)) + (n6 IN (:arr6))) AS nos from customer_scratchcards where lottery_draw_id=:cid having nos >= 3 order by nos desc"),array('cid'=>$draw_id,'arr1'=>$winning_numbers,'arr2'=>$winning_numbers,'arr3'=>$winning_numbers,'arr4'=>$winning_numbers,'arr5'=>$winning_numbers,'arr6'=>$winning_numbers));
        //dd(DB::getQueryLog());
        //dd($results);


        return view('finalize_draw',['winning_number'=>$winning_numbers,'draw'=>$draw,'draw_id'=>$draw_id,'results'=>$results]);
    }

    public function approveWinning(Request $request)
    {
        $draw_id = $request->input('draw_id');
        $draw = LotteryDraw::find($draw_id);
        if($draw){
            $winning_numbers=$request->input('winning_number');
            $draw->winning_code = $winning_numbers;
            $draw->status = 'closed';
            $draw->save();

            $arr_in = explode(',',$winning_numbers);

            $results = DB::select( DB::raw("select id, n1, n2, n3, n4, n5, n6, ((n1 IN (:arr1)) + (n2 IN (:arr2)) + (n3 IN (:arr3)) + (n4 IN (:arr4)) + (n5 IN (:arr5)) + (n6 IN (:arr6))) AS nos from customer_scratchcards where lottery_draw_id=:did having nos >= 3 order by nos desc"),array('did'=>$draw->id,'arr1'=>$winning_numbers,'arr2'=>$winning_numbers,'arr3'=>$winning_numbers,'arr4'=>$winning_numbers,'arr5'=>$winning_numbers,'arr6'=>$winning_numbers));
            $num_winning_entries = count($results);
            $jackpot = $draw->jackpot_amount;
            $each_winning = 0;
            if($num_winning_entries>0){
                $each_winning = $jackpot/$num_winning_entries;
            }

            foreach($results as $r)
            {
                $id = $r['id'];
                $sc = CustomerScratchcard::find($id);
                if($sc){
                    LotteryWinners::create([
                        'draw_id'=>$draw->id,
                        'customer_scratchcard_id'=>$sc->id,
                        'winning_amount'=>$each_winning,
                    ]);
                }
            }
        }
        return redirect()->route('lotteries');
    }

    function secureGenerate()
    {
        //The number of regular lotto numbers (non-bonus / non-powerball / white ball)
        $regularNumbers = 5;

//The number of bonus / powerball numbers.
        $bonusNumbers = 1;

//The range for regular numbers.
        $regularNumbersMin = 1;
        $regularNumbersMax = 69;

//The range for bonus / powerball numbers.
        $bonusNumbersMin = 1;
        $bonusNumbersMax = 26;

//Usually, the bonus number can be the same as
//one of the already-chosen regular numbers.
//Set this to true if you want the bonus number
//to be completely unique.
        $bonusUniqueFromRegular = false;

//An array to hold our lotto results in.
        $results = array(
            'regular_nums' => array(),
            'bonus_nums' => array()
        );

//Generate the results for our regular numbers.
        foreach (range(1, $regularNumbers) as $i) {
            $randNum = mt_rand($regularNumbersMin, $regularNumbersMax);
            while (in_array($randNum, $results['regular_nums'])) {
                $randNum = mt_rand($regularNumbersMin, $regularNumbersMax);
            }
            array_push($results['regular_nums'], $randNum);
        }

//Generate the results for our bonus numbers.
        foreach (range(1, $bonusNumbers) as $i) {
            $randNum = mt_rand($bonusNumbersMin, $bonusNumbersMax);
            while (in_array($randNum, $results['bonus_nums']) || ($bonusUniqueFromRegular && in_array($randNum, $results['regular_nums']))) {
                $randNum = mt_rand($bonusNumbersMin, $bonusNumbersMax);
            }
            array_push($results['bonus_nums'], $randNum);
        }

//Sort both result arrays for the sake of readability.
//Generally, lotto results are displayed from lowest to highest.
        sort($results['regular_nums']);
        sort($results['bonus_nums']);

//Print out our lotto results.
        //echo 'Results: <br>';
        //echo implode(", ", $results['regular_nums']);
        //echo '<br>';
        //echo 'Bonus: <br>';
        //echo implode(", ", $results['bonus_nums']);
        //return implode(", ", $results['bonus_nums']);
        //return array_merge($results['regular_nums'],$results['bonus_nums']);
        return $results;
    }
}
