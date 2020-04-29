<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: LotteryDraw.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE LotteryDraw.php FILE IN THE Models FOLDER IS TIED TO THE "LOTTERY DRAW"
TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON "LOTTERY DRAW" TABLE IN THE DATABASE. 
   
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LotteryDraw extends Model
{
    protected $table='lottery_draws';
    protected $fillable=['lottery_id','draw_date','winning_code','status','jackpot_amount'];

    protected $dates = ['draw_date'];

    public function lottery(){
        return $this->belongsTo('App\Models\Lottery', 'lottery_id', 'id');

    }

}
