<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: verify.blade.php
DATE: 01 APRIL 2020

PURPOSE: THE PURPOSE OF THIS PHP CODE IS TO DISPLAY A FORM PAGE THAT ALLOW USERS VERIFY THEIR EMAIL ADDRESS AND IF IT IS CORRECT, DISPLAYS A MESSAGE TO THE USER THAT
THE VERIFICATION LINK HAS BEEN SENT TO THEIR E-MAIL ADDRESS. IT USES THE LARAVEL IN-BUILT TEMPLATE WHOSE CODE CAN BE FOUND IN THE FOLDERS qlotto > resources > views >
layouts > app.blade.php and I EXTENDED THE CODE IN THIS FILE WITH ADDITIONAL CODES WRITTEN BY ME. THE FIRST LINE OF CODE ON LINE 14 REFERS TO THE LARAVEL LAYOUT TEMPLATE
USED AND NOTIFIES LARAVEL THAT THIS TEMPLATE CODE SHOULD BE INCLUDED WITH THE verify.blade.php CODE, ALL OTHER LINES OF CODE IN THIS FILE WERE WRITTEN BY ME.

 -->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
