<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

/*
AUTHOR: CHRISTIANA TEMIOLA.
CODE TITLE: CustomerController.php
DATE: 30 DECEMBER 2019

PURPOSE: THIS PHP CODE IS RESPONSIBLE FOR HANDLING USER REQUESTS FOR VIEWING CUSTOMERS DETAILS.
THE CONTROLLER RECEIVES THIS REQUEST AND DESIGNATE IT TO THE EITHER THE MODEL OR VIEW CHANNEL FOR APPROPRIATE ACTION.
*/


class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customers',['customers'=>$customers]);
    }
}
