<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;


/*
AUTHOR: LARAVEL FRAMEWORK.
CODE TITLE: ConfirmPasswordController.php
DATE: 30 DECEMBER 2019

PURPOSE: THIS PHP CODE ACTS AS ConfirmPassword CONTROLLER. EVERY USER REQUEST TO ConfirmPassword GETS TO THIS ConfirmPasswordController FIRST BEFORE THE CONTROLLER
DESIGNATE IT TO THE APPROPRIATE CHANNEL I.E MODEL OR VIEW.

*/


class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. This trait can be exploited
    | and any function that requires customization can be overriden.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
