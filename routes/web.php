<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Auth::routes();

Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '.*');

// Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('all-users');
// Route::post('/store-user', [App\Http\Controllers\UserController::class, 'store'])->name('store-user');
// Route::get('/create-user', [App\Http\Controllers\UserController::class, 'create'])->name('create-user');
// Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('edit-user');
// Route::put('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'update'])->name('update-user');
// Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('delete-user');


// Route::get('/{any}', 'HomeController@index')->where('any','.*');
