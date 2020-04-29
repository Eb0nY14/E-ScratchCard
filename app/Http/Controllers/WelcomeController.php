<!--                         
AUTHOR: CHRISTIANA TEMIOLA.
CODE TITLE: WelcomeController.php
DATE: 30 DECEMBER 2019

PURPOSE: Welcome.php IS A CONTROLLER RESPONSIBLE FOR HANDLING/RECEIVING USER REQUESTS TO DISPLAY THE WELCOME/UPCOMING DRAWS PAGE AND DESIGNATE IT TO THE VIEW SECTION
TO DISPLAY IT TO USERS ON THE SCREEN .    

-->


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
