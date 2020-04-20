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
