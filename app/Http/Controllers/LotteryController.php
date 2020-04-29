<!--                         
AUTHOR: CHRISTIANA TEMIOLA.
CODE TITLE: LotteryController.php
DATE: 30 DECEMBER 2019

PURPOSE: THIS LOTTERY CONTROLLER RECEIVES REQUEST TO ADD A NEW LOTTERY, PROCESS THE REQUEST AND DESIGNATE IT TO THE VIEW FOR DISPLAY.

-->


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lottery;
use App\Models\LotteryDraw;
use Illuminate\Support\Str;

use App\Traits\UploadTrait;

class LotteryController extends Controller
{
    use UploadTrait;

    public function index(){
        $lotteries = Lottery::all();
        return view('lotteries',['lotteries'=>$lotteries]);
    }
    public function addLottery(Request $request){
        $logo_url = '';
        if ($request->has('lottery_logo')) {
            //get the image file
            $image = $request->file('lottery_logo');
            //make a image name based on username and timestamp
            $name = Str::slug($request->get('lottery_name'));
            //Define folder path
            $folder = '/uploads/lotteries/';
            //make a file path where image will be stored [folder pth + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            //upload image
            $this->uploadOne($image, $folder, 'public', $name);
            //set the enrollee passport path in database to filepath
            $logo_url = $filePath;
        }
        $lottery = Lottery::create([
            'lottery_name'=>$request->get('lottery_name'),
            'lottery_logo'=>$logo_url
        ]);
        if($lottery)
        {
            $request->session()->flash('success', 'Lottery '.$lottery->lottery_name.' was added successfully!');
        }else{
            $request->session()->flash('error', 'Lottery could not be added!');
        }
        return redirect()->route('lotteries');
    }

    public function addDraw(Request $request){
        $draw = LotteryDraw::create([
            'lottery_id'=>$request->get('lottery_id'),
            'draw_date'=>$request->get('draw_date'),
            'jackpot_amount'=>$request->get('jackpot_amount')
        ]);
        $lottery = Lottery::find($request->get('lottery_id'));
        if($draw)
        {
            $request->session()->flash('success', 'Draw for Lottery '.$lottery->lottery_name.' was added successfully!');
        }else{
            $request->session()->flash('error', 'Draw for Lottery could not be added!');
        }
        return redirect()->route('lotteries');
    }

    public function pickNumber($drawId){
        $draw = LotteryDraw::find($drawId);
        if($draw){
            return view('pick_number',['draw'=>$draw]);
        }
    }
}
