<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    protected $table='customer_payments';
    protected $fillable =['user_id','payment_date','status','reference','amount','mode_of_payment'];


}
