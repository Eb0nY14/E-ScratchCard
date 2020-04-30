<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: User.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCHITECTURE.  THE User.php FILE IN THE
Models FOLDER IS TIED TO THE "users" TABLE IN THE DATABASE AND IS CALLED WHEN THERE IS ANY CRUD OPERATION TO BE
PERFORMED ON "users" TABLE IN THE DATABASE.

 -->


<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Cashier\Billable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;

    use HasRoles;

    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guard_name = 'web';

    public function profile(){
        return $this->hasOne('App\Models\Profile', 'user_id', 'id');
    }

    public function paymentProfile(){
        return $this->hasOne('App\Models\PaymentProfile', 'user_id', 'id');
    }
}
