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
