<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UiController;
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

//ROUTE AUTH
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginpost', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// ROUTE UMUM
Route::get('/',function(){
    return view('welcome');
});

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('postuser', [AuthController::class, 'postuser'])->name('postuser');


//MIDDLEWARE
Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::get('client', [UiController::class, 'client'])->name('client');
    Route::get('admin', [UiController::class, 'admin'])->name('admin');
    Route::get('rektor', [UiController::class, 'rektor'])->name('rektor');
});

Route::group(['middleware' => ['auth','checkRole:admin,client']],function(){
    Route::get('client', [UiController::class, 'client'])->name('client');
});

Route::group(['middleware' => ['auth','checkRole:admin,rektor']],function(){
    Route::get('rektor', [UiController::class, 'rektor'])->name('rektor');
});

Route::group(['middleware' => ['auth','checkRole:rektor']],function(){
    // Route::get('client', [UiController::class, 'client'])->name('client');
});



