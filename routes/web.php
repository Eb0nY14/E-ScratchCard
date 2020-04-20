<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('profile', 'HomeController@profile')->name('profile');
    Route::post('editProfile', 'HomeController@editProfile')->name('editProfile');
    Route::post('editPaymentProfile', 'HomeController@editPaymentProfile')->name('editPaymentProfile');
    Route::get('logout', 'Auth\LoginController@logout', function () {
        return abort(404);
    });
    Route::get('lotteries','LotteryController@index')->name('lotteries');
    Route::get('customers','CustomerController@index')->name('customers');
    Route::post('addLottery','LotteryController@addLottery')->name('addLottery');
    Route::post('addLotteryDraw','LotteryController@addDraw')->name('addLotteryDraw');

    Route::get('pickNumber/{drawId}','LotteryController@pickNumber')->name('pickNumber');

    Route::post('cart','CartController@cart')->name('cart');
    Route::post('processCartPaypal','CartController@processCartPaypal')->name('processCartPaypal');
    Route::get('paypalPayment/success', 'CartController@paypalSuccess')->name('paypalPayment.success');
    Route::get('cancelPayment', 'CartController@cancel')->name('payment.cancel');
    Route::get('drawWinningNumber/{drawId}','DrawController@generateWinningNumber')->name('drawWinningNumber');

    Route::post('approveWinnings','DrawController@approveWinning')->name('approveWinning');
});

