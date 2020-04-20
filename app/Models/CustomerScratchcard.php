<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerScratchcard extends Model
{
    protected $table='customer_scratchcards';
    protected $fillable=['user_id','n1','n2','n3','n4','n5','n6','lottery_draw_id','payment_id','status'];
}
