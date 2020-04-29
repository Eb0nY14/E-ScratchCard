<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: Customer.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE Customer.php FILE IN THE Models FOLDER IS TIED TO THE CUSTOMER
TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON CUSTOMER TABLE IN THE DATABASE.    

 -->


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

