<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    protected $fillable=['date_registered','user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}


