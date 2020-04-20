<?php


namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\LotteryDraw;
use Carbon\Carbon;
use DB;

class WelcomeController extends Controller
{
    public function index()
    {
        //$date = now();
        DB::enableQueryLog();
        $upcoming_draws = LotteryDraw::where('draw_date','>',Carbon::now())->get();
        //$queries = DB::getQueryLog();
        //dd($queries);
        //dd($upcoming_draws);
        return view('welcome',['draws'=>$upcoming_draws]);
    }

}
