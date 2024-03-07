<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/home', function () {
    return view('layouts.home');
})->name('home');

Route::get('/single-post', function () {
    return view('single-post');
});

Route::get('/contact', function () {
    return view('contact');
});

/// admin routes
Route::get('/administrator', function () {
    return view('admin.AdminHome');
});

Route::get('/administrator/login', function () {
    return view('admin.login');
});

