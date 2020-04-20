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
