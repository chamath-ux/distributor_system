<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::post('logout' ,[LoginController::class,'logout']);

});

Route::middleware('guest')->group(function () {

    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::post('login',[LoginController::class,'store']);
    Route::resource('register',RegisterController::class);

});




