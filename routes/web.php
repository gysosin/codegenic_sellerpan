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
        return view('register');
});
Route::get('/seller-forgot-password', function(){
        return view('forgotPassword');
});


Route::get('/', function () {
    return view('welcome');
});
