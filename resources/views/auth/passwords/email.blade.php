<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: email.blade.php
DATE: 06 APRIL 2020

PURPOSE: THE PURPOSE OF THIS PHP CODE IS TO CREATE A FORM SCREEN THAT WILL ALLOW THE USER TO ENTER HIS EMAIL ADDRESS AS INPUT AND RECEIVE A LINK IN THEIR
EMAIL THAT THEY CAN USE TO RESET THEIR PASSWORD.  IT USES THE LARAVEL IN-BUILT TEMPLATE WHOSE CODE CAN BE FOUND IN THE FOLDERS qlotto > resources > views > layouts > 
app.blade.php and I EXTENDED THE CODE IN THIS FILE WITH ADDITIONAL CODES WRITTEN BY ME. THE FIRST LINE OF CODE ON LINE 14 REFERS TO THE LARAVEL LAYOUT TEMPLATE
USED AND NOTIFIES LARAVEL THAT THIS TEMPLATE CODE SHOULD BE INCLUDED WITH THE email.blade.php CODE, ALL OTHER LINES OF CODE IN THIS FILE WERE WRITTEN BY ME.

 -->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
