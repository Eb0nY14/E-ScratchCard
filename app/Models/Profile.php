<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: Profile.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE Profile.php FILE IN THE Models FOLDER IS TIED TO THE "PROFILE"
TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON "PROFILE" TABLE IN THE DATABASE.

-->


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
