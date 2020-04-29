<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/*
AUTHOR: LARAVEL FRAMEWORK.
CODE TITLE: Controller.php
DATE: 30 DECEMBER 2019

PURPOSE: THIS PHP CODE IS RESPONSIBLE FOR ALL THE REQUEST HANDLING LOGIC.
*/

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
