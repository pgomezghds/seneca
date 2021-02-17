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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\User\UserController::class, 'profile'])->name('profile');
Route::post('/profile', [App\Http\Controllers\User\UserController::class, 'update']);
Route::get('/user/active/{id}', [App\Http\Controllers\User\UserController::class, 'active'])->name('active');