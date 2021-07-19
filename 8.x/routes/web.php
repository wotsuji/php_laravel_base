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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\TopController::class, 'top']);

Route::get('/top', function () {
    return view('top');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/finish', function () {
    return view('finish');
});


