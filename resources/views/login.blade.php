<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: login.blade.php
DATE: 01 APRIL 2020

PURPOSE: THE PURPOSE OF THIS PHP CODE IS TO CREATE AND DISPLAY THE VIEW FOR THE LOGIN PAGE. IT USES THE LARAVEL IN-BUILT TEMPLATE WHOSE CODE
CAN BE FOUND IN THE FOLDERS qlotto > resources > views > layouts > base.blade.php and I EXTENDED THE CODE IN THIS FILE WITH ADDITIONAL 
CODES WRITTEN BY ME. THE FIRST LINE OF CODE ON LINE 14 REFERS TO THE LARAVEL LAYOUT TEMPLATE USED AND NOTIFIES LARAVEL THAT THIS TEMPLATE CODE 
SHOULD BE INCLUDED WITH THE login.blade.php CODE, ALL OTHER LINES OF CODE IN THIS FILE WERE WRITTEN BY ME.

 -->


@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Login to Play</li>
@endsection
@section('body')
    <!-- login begin-->
    <div class="form style-2">
            <!--<div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <h2>Login To Play</h2>
                    <div class="section-title text-center">
                        <h2>Login To Play</h2>
                    </div>
                </div>
            </div>-->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <form>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputName">Name<span class="requred">*</span></label>
                                    <input type="text" class="form-control" id="InputName" placeholder="Enter Your Name"
                                           required>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputAmount">E-mail<span class="requred">*</span></label>
                                    <input type="email" class="form-control" id="InputAmount" placeholder="Enter Your E-mail Address"
                                           required>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group mb-0 checkbox">
                                    <div class="form-check pl-0">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Keep me loged in
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-xl-6 col-lg-6">
                                        <button type="submit" class="login-button">Login</button>
                                        <div style="">
                                            <a href="#" style="text-align: left" class="forgetting-password">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                                       <a href="{{ url('register') }}" class="forgetting-password">No Account? Click to Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- login end -->
@endsection