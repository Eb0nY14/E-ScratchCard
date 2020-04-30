<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: LotteryDraw.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCHITECTURE.  THE LotteryDraw.php FILE
IN THE Models FOLDER IS TIED TO THE "lottery_draws" TABLE IN THE DATABASE AND IS CALLED WHEN THERE IS ANY CRUD OPERATION
TO BE PERFORMED ON "lottery_draws" TABLE IN THE DATABASE. 
   
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
