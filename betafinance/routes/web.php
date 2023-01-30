<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return 'First sub domain';
// })->domain('admin.' . env('APP_URL'));

// ADIM ROUTE

Route::get('/login',[PageController::class,'home']);
Route::post('login-admin',[PageController::class,'loginAttempt']);
Route::post('create-admin',[PageController::class,'createAdmin']);
Route::get('/table',[PageController::class,'table']);



Route::get('/', [homeController::class, 'index']);
// Route::get('/paycard', [homeController::class, 'payCard']);
Route::post('/loan-details',[homeController::class, 'payCard']);
Route::post('/loan-app-pay/{name}/{email}',[homeController::class, 'loanApplicationPay']);
Route::get('/loan-app-confirm',[homeController::class, 'payment_details']);





Route::get('/loan-approved/', function () {
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

// Route::get('/loan-app', function () {
    // return view('loanapplication');
// });

// Route::post('/loan-details', function () {
//     return view('applicationdetails');
// });

Route::get('/contact', function () {
    return view('contactpage');
});

Route::get('/loan-app', function () {
    return view('loanapplication');
});

Route::get('/loan-app-details', function () {
    return view('applicationdetails');
});