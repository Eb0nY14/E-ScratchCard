<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: error.blade.php
DATE: 01 APRIL 2020

PURPOSE: THE PURPOSE OF THIS PHP CODE IS TO DISPLAY ERROR MESSAGE WHEN ANY ERROR IS ENCOUNTERED. IT USES THE LARAVEL IN-BUILT TEMPLATE WHOSE CODE CAN
BE FOUND IN THE FOLDERS qlotto > resources > views > layouts > base.blade.php and I EXTENDED THE CODE IN THIS FILE WITH ADDITIONAL 
CODES WRITTEN BY ME. THE FIRST LINE OF CODE ON LINE 14 REFERS TO THE LARAVEL LAYOUT TEMPLATE USED AND NOTIFIES LARAVEL THAT THIS TEMPLATE CODE SHOULD BE INCLUDED WITH
THE error.blade.php CODE, ALL OTHER LINES OF CODE IN THIS FILE WERE WRITTEN BY ME.

 -->


@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Lottery Draws</li>
@endsection
@section('body')

    <div class="card">
        <div class="card-body" style="width:100%; text-align: center;">
            <h1>Error Encountered</h1>
            <div>{{ $error_message }}</div>
        </div>

    </div>
    <table >

    </table>

@endsection
