<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/index', function () {
    return view('layouts.index');
});

Route::get('/secretary', [\App\Http\Controllers\HomeController::class, 'secretary'])->name('secretary');
Route::get('/student', [\App\Http\Controllers\HomeController::class, 'student'])->name('student');
Route::get('/table', [\App\Http\Controllers\HomeController::class, 'table'])->name('table');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin' ,'middleware' =>['isAdmin', 'auth']], function () {
    Route::get('/secretary', [\App\Http\Controllers\HomeController::class, 'secretary'])->name('secretary');
    Route::get('/student', [\App\Http\Controllers\HomeController::class, 'student'])->name('student');
    Route::get('/table', [\App\Http\Controllers\HomeController::class, 'table'])->name('table');
});

Route::group(['prefix'=>'user' ,'middleware' =>['isUser', 'auth']], function () {
    Route::get('/secretary', [\App\Http\Controllers\HomeController::class, 'secretary'])->name('secretary');
    Route::get('/student', [\App\Http\Controllers\HomeController::class, 'student'])->name('student');
    Route::get('/table', [\App\Http\Controllers\HomeController::class, 'table'])->name('table');
});
