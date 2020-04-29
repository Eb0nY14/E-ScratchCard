<!--                         
AUTHOR: LARAVEL FRAMEWORK.
CODE TITLE: ResetPasswordController.php
DATE: 30 DECEMBER 2019

PURPOSE: THIS PHP CODE ACTS AS A "Reset Password" CONTROLLER. EVERY USER REQUEST FOR PASSWORD RESET GETS TO THIS ResetPassword Controller FIRST BEFORE THE CONTROLLER 
DESIGNATE IT TO THE APPROPRIATE CHANNEL I.E MODEL OR VIEW FOR APPROPRIATE ACTION.    

-->


<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';
}
