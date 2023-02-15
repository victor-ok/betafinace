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
Route::get('/welcome',[PageController::class,'welcome']);
Route::post('login-admin',[PageController::class,'loginAttempt']);
Route::post('create-admin',[PageController::class,'createAdmin']);
Route::get('create-admin-page',[PageController::class,'create_Admin']);
Route::get('/approve-table',[PageController::class,'approve_table']);
Route::get('/disburse-table',[PageController::class,'disburse_table']);

Route::get('/approve-table-search',[PageController::class,'approve_table_search']);
Route::get('/disburse-table-search',[PageController::class,'disburse_table_search']);
Route::get('/confirm-disburse',[PageController::class, 'confirm_disburse']);



Route::get('/', [homeController::class, 'index']);
Route::get('/apply', [homeController::class, 'start']);
// Route::get('/paycard', [homeController::class, 'payCard']);
Route::post('/loan-details',[homeController::class, 'payCard']);
Route::post('/loan-app-pay/{name}/{email}',[homeController::class, 'loanApplicationPay']);
Route::get('/loan-app',[homeController::class, 'payment_details']);
Route::get('/loan-app-confirm',[homeController::class, 'checking_status']);

Route::get('/loan-accept',[homeController::class, 'accept_loan']);
Route::get('/loan-decline',[homeController::class, 'decline_loan']);



Route::get('/loan-accept-edit',[homeController::class, 'accept_loan_edit']);
Route::get('/decline-loan',[homeController::class, 'decline_after_edit']);
Route::get('/accept-loan',[homeController::class, 'accept_after_edit']);
Route::post('/loan-app-disburse/{email}',[homeController::class, 'confirm_after_edit']);





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

Route::get('/loan-app-status', function () {
    return view('loanapplicationpending');
});

// Route::post('/loan-details', function () {
//     return view('applicationdetails');
// });

Route::get('/contact', function () {
    return view('contactpage');
});

// Route::get('/loan-app', function () {
//     return view('loanapplication');
// });

Route::get('/loan-app-details', function () {
    return view('applicationdetails');
});