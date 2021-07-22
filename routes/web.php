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

Route::get('/seller-login', function () {
    return view('login');
});
Route::get('/seller-register', function () {
    return view('registration/registrationSelector');
});
Route::get('/seller-forgot-password', function () {
    return view('forgotPassword');
});
Route::get('/registration-select', function () {
    return view('registration/registrationSelector');
});
Route::get('/register-gstin', function () {
    return view('registration/gstinRegister');
});
Route::get('/register-no-gstin', function () {
    return view('registration/noGstinregister');
});
Route::get('/register-upload', function () {
    return view('registration/uploadDoc');
});
Route::get('/register-upload-gst', function () {
    return view('registration/uploadGstDoc');
});
Route::get('/main-dashboard', function () {
    return view('dashboard/dashboard');
});
Route::get('/dashboard-products', function () {
    return view('dashboard/products');
});
Route::get('/dashboard-orders', function () {
    return view('dashboard/orders');
});
Route::get('/dashboard-reviews', function () {
    return view('dashboard/reviews');
});
Route::get('/dashboard-sellhistory', function () {
    return view('dashboard/sellinghistory');
});
Route::get('/dashboard-alltrans', function () {
    return view('dashboard/alltrans');
});
Route::get('/dashboard-pendingamount', function () {
    return view('dashboard/pendingamount');
});
Route::get('/', function () {
    return view('login');
});
