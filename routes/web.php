<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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

/* ------------------ Guest Routes ----------------- */

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
//Route::get('/login', function () {
//  return view('auth/Login');
//});

/* ------------------------------------------------- */

/* -------------- Login -- Register ---------------- */

Route::middleware(['middleware'=>'PreventHistory'])->group(function () {
    Auth::routes();
});

/* -------------------------------------------------- */
/* ------------------ User Routes ------------------- */

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('history', [UserController::class, 'settings'])->name('user.history');
});

/* ------------------------------------------------- */
/* ------------------ Admin Routes ----------------- */

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('usersProfile', [AdminController::class, 'settings'])->name('admin.usersProfile');
});

/* -------------------------------------------------- */

