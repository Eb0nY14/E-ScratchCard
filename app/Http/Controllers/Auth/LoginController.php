<!--                         
AUTHOR: LARAVEL FRAMEWORK.
CODE TITLE: LoginController.php
DATE: 30 DECEMBER 2019

PURPOSE: THIS PHP CODE ACTS AS Login CONTROLLER. EVERY USER REQUEST FOR LOGGING IN IS HANDLED BY THIS LoginController FIRST BEFORE THE CONTROLLER 
DESIGNATE IT TO THE APPROPRIATE CHANNEL I.E MODEL OR VIEW.    

-->


<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Syslog;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    function authenticated( \Illuminate\Http\Request $request, $user)
    {
        /*$user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);*/
        Syslog::create([
            'user_id'=> Auth::user()->id,
            'log_type'=>'Login',
            'activity'=>'Successful login attempt',
            'user_ip'=>$request->getClientIp()
        ]);
    }
}
