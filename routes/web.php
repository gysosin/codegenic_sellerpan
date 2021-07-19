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
Route::get('/seller-login', function(){
        return view('login');
});
Route::get('/seller-register', function(){
        return view('registration/registrationSelector');
});
Route::get('/seller-forgot-password', function(){
        return view('forgotPassword');
});
Route::get('/registration-select', function(){
    return view('registration/registrationSelector');
});
Route::get('/register-gstin', function(){
    return view('registration/gstinRegister');
});
Route::get('/register-no-gstin', function(){
    return view('registration/noGstinregister');
});
Route::get('/main-dashboard', function(){
    return view('dashboard/dashboard');
});
Route::get('/', function () {
    return view('login');
});
