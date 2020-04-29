<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: PaymentProfile.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE PaymentProfile.php FILE IN THE Models FOLDER IS TIED TO THE "PAYMENT PROFILE"
TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON "PAYMENT PROFILE" TABLE IN THE DATABASE.

-->


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentProfile extends Model
{
    protected $table='payment_profiles';
    protected $fillable = ['preferred_bank_account_number', 'preferred_bank_account_name', 'preferred_bank_name', 'means_of_identification', 'id_card_number', 'id_expiry_date', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
