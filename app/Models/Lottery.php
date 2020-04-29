<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: Lottery.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE Lottery.php FILE IN THE Models FOLDER IS TIED TO THE LOTTERY
TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON LOTTERY TABLE IN THE DATABASE.    

 -->
 
 
 <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    protected $table='lotteries';
    protected $fillable=['lottery_name','lottery_logo'];

    protected $dates = ['created_at'];

    public function draws(){
        return $this->hasMany('App\Models\LotteryDraw', 'lottery_id', 'id');
    }

    public function latestDraw() {
        return $this->hasOne('App\Models\LotteryDraw','lottery_id','id')->latest();
    }
}
