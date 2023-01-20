<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/loan-approved', function () {
    return view('loanapproved');
});

Route::get('/loan-declined', function () {
    return view('loandeclined');
});

Route::get('/repay-success', function () {
    return view('repaymentsuccess');
});

Route::get('/repay-failed', function () {
    return view('repaymentfailed');
});

Route::get('/contact', function () {
    return view('contactpage');
});
