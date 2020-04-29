<!--                         
AUTHOR: LARAVEL FRAMEWORK.
CODE TITLE: RegisterController.php
DATE: 30 DECEMBER 2019

PURPOSE: THIS PHP CODE ACTS AS Register CONTROLLER. EVERY USER REQUEST FOR REGISTRATION GETS TO THIS RegisterController FIRST BEFORE THE CONTROLLER 
DESIGNATE IT TO THE APPROPRIATE CHANNEL I.E MODEL OR VIEW.    

-->


<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Syslog;
use App\Models\User;
use App\Models\Customer;
use App\Models\Profile;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $date = Carbon::now()->subYear(18);
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'date_of_birth'=>['required','string','olderThan:18'],
            'date_of_birth'=>['required','BeforeOrEqual:'.$date],
            [
                'date_of_birth.BeforeOrEqual'=> 'The :attribute must be 18 years or older.',
            ]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user= User::create([
            'name' => $data['first_name'].' '.$data['last_name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
        Customer::create([
            'date_registered'=>date('Y-m-d'),
            'user_id'=>$user->id,
        ]);
        Profile::create([
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'phone_number'=>$data['phone_number'],
            'email'=>$data['email'],
            //'sex'=>$data['sex'],
            'address_line1'=>$data['address_line1'],
            'address_line2'=>$data['address_line2'],
            'date_registered'=>date('Y-m-d'),
            'date_of_birth'=>date('Y-m-d'),
            'user_id'=>$user->id,
        ]);
        Syslog::create([
            'user_id'=> $user->id,
            'log_type'=>'Customer Registration',
            'activity'=>'Successful Customer Registration',
            'user_ip'=>''
        ]);
        return $user;
    }
}
