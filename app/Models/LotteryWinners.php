<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LotteryWinners extends Model
{
    protected $table='lottery_winners';
    protected $fillable=['draw_id','customer_scratchcard_id','winning_amount'];
}
