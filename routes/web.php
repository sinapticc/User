<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [UserController::class, 'index'])->name('users.index');

Route::post('/store', [UserController::class, 'store']);

Route::get('/create', [UserController::class, 'create']);

Route::get('/user/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/get-cities/{provinceId}', [UserController::class, 'getCities'])->name('cities.get');

