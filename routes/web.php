<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

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

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::Post('/login', [loginController::class, 'store'])->name('login.user');
Route::get('/register', [registerController::class, 'index'])->name('register');
Route::Post('/register', [registerController::class, 'store'])->name('register');

Route::group(['prefix' => 'user'], function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

