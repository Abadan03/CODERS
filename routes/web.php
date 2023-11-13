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
})->name('home');



Route::get('/news', function () {
    return view('news');
})->name('news');



Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/division', function () {
    return view('division');
})->name('division');

// DIVISION COMPONENTS
Route::get('/web', function () {
    return view('web');
})->name('web');

Route::get('/uiux', function () {
    return view('uiux');
})->name('uiux');

Route::get('/mobile', function () {
    return view('mobile');
})->name('mobile');

Route::get('/data', function () {
    return view('data');
})->name('data');

Route::get('/ai', function () {
    return view('ai');
})->name('ai');

Route::get('/comp', function () {
    return view('comp');
})->name('comp');
