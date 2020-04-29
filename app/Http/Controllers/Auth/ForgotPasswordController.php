<!--                         
AUTHOR: LARAVEL FRAMEWORK.
CODE TITLE: ForgotPasswordController.php
DATE: 30 DECEMBER 2019

PURPOSE: THIS PHP CODE ACTS AS ForgotPassword CONTROLLER. IT HANDLES THE GENERATION OF PASSWORD RESET EMAILS FOR EVERY USER REQUEST FOR PASSWORD RESET.  
IT GETS TO THIS ForgotPasswordController FIRST BEFORE THE CONTROLLER DESIGNATE IT TO THE APPROPRIATE CHANNEL I.E MODEL OR VIEW FOR APPROPRIATE ACTION.  

-->


<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. 
    |
    */

    use SendsPasswordResetEmails;
}
