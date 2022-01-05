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
    return view('welcome');
});
Route::get('/about_us', function () {
    return view('/pages/about_us');
});
Route::get('/destinations', function () {
    return view('/pages/destinations');
});
Route::get('/stories', function () {
    return view('/pages/stories');
});
Route::get('/join_us', function () {
    return view('/pages/join_us');
});
Route::get('/services', function () {
    return view('/pages/services');
});
Route::get('/login', function () {
    return view('auth/Login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
