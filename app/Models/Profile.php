<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table='profiles';
    protected $fillable=['first_name','last_name','phone_number','email','sex','address_line1','address_line2','date_of_birth','user_id','image_url'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
