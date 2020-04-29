<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: CustomerPayment.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE CustomerPayment.php FILE IN THE Models FOLDER IS TIED TO THE "CUSTOMER PAYMENT"
TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON "CUSTOMER PAYMENT" TABLE IN THE DATABASE.    

 -->


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    protected $table='customer_payments';
    protected $fillable =['user_id','payment_date','status','reference','amount','mode_of_payment'];


}
