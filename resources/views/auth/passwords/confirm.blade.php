<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: confirm.blade.php
DATE: 06 APRIL 2020

PURPOSE: THE PURPOSE OF THIS PHP CODE IS TO ALLOW A USER CONFIRM HIS PASSWORD AND IF THERE IS A MATCH IN THE PASSWORDS ENTERED, HE WILL BE AUTHENTICATED TO THE APP. 
IT USES THE LARAVEL IN-BUILT TEMPLATE WHOSE CODE CAN BE FOUND IN THE FOLDERS qlotto > resources > views > layouts >  
app.blade.php and I EXTENDED THE CODE IN THIS FILE WITH ADDITIONAL CODES WRITTEN BY ME.  THE FIRST LINE OF CODE ON LINE 14 REFERS TO THE LARAVEL LAYOUT TEMPLATE
USED AND NOTIFIES LARAVEL THAT THIS TEMPLATE CODE SHOULD BE INCLUDED WITH THE confirm.blade.php CODE, ALL OTHER LINES OF CODE IN THIS FILE WERE WRITTEN BY ME.

 -->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
