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
return view('layouts.app', ['judul' => 'Home']);
});

Route::get('/login-register', function () {
    return view('layouts.app', ['judul' => 'Login-Register']);
});

Route::get('/courses', function () {
    return view('layouts.app', ['judul' => 'Course']);
});

Route::get('/aboutus', function () {
    return view('layouts.app', ['judul' => 'About Us']);
});



