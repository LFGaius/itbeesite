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

Route::get('/ventemateriel', function () {
    return view('pages.ventemateriel');
});

Route::get('/coaching', function () {
    return view('pages.coaching');
});

Route::get('/formation', function () {
    return view('pages.formation');
});

Route::get('/consulting', function () {
    return view('pages.consulting');
});

Route::get('/maintinfo', function () {
    return view('pages.maintinfo');
});


Route::get('/secretbureau', function () {
    return view('pages.secretbureau');
});

