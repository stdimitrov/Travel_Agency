<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TripsController;
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

/* ------ Guest Routes Get - method ------ */
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

    /* ----------------------- All Index Profile Pages  Get - method ------------------------- */
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('usersProfile', [AdminController::class, 'usersProfile'])->name('admin.usersProfile');
    Route::get('tripsProfile', [AdminController::class, 'tripsProfile'])->name('admin.tripsProfile');

    /* ----------------------- Users CRUD Get - method ------------------------------------------------------------------------------------- */
    Route::get('usersProfileEdit/{id}', [AdminUsersController::class, 'usersProfileEdit'])->name('admin.usersCrud.usersProfileEdit');
    Route::get('usersProfileCreate', [AdminUsersController::class, 'usersProfileCreate'])->name('admin.usersCrud.usersProfileCreate');

    /* ----------------------- Trips CRUD Get - method ------------------------------------------------------------------------------------- */
    Route::get('tripsEdit/{id}', [TripsController::class, 'tripsEdit'])->name('admin.tripsCrud.tripsEdit');
    Route::get('tripsCreate', [TripsController::class, 'tripsCreate'])->name('admin.tripsCrud.tripsCreate');

    /* ----------------------- Users CRUD Post - method ------------------------------------------------------------------------------------- */
    Route::post('usersProfileStore', [AdminUsersController::class, 'usersProfileStore'])->name('admin.usersCrud.usersProfileStore');
    Route::post('usersProfileUpdate/{id}', [AdminUsersController::class, 'usersProfileUpdate'])->name('admin.usersCrud.usersProfileUpdate');

    /* ----------------------- Users CRUD Delete - method ------------------------------------------------------------------------------------- */
    Route::DELETE('usersProfileDestroy/{id}', [AdminUsersController::class, 'usersProfileDestroy'])->name('admin.usersCrud.usersProfileDestroy');

    /* ----------------------- Trips CRUD Post - method ------------------------------------------------------------------------------------- */
    Route::post('tripsStore', [TripsController::class, 'tripsStore'])->name('admin.tripsCrud.tripsStore');
    Route::post('tripsUpdate/{id}', [TripsController::class, 'tripsUpdate'])->name('admin.tripsCrud.tripsUpdate');

    /* ----------------------- Trips CRUD Delete - method ------------------------------------------------------------------------------------- */
    Route::DELETE('tripsDestroy/{id}', [TripsController::class, 'tripsDestroy'])->name('admin.tripsCrud.tripsDestroy');

});

/* -------------------------------------------------- */

