<?php

use App\Http\Controllers\UserController;
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\ForgetPasswordManager;

=======
use \App\Http\Controllers\AuthController;
>>>>>>> 565adabba8cb7b70602df239b271647cd6000fa8
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::get('/forget_password', [ForgetPasswordManager::class, 'forgetPassword'])->name('forget.password');
    Route::post('/forget_password', [ForgetPasswordManager::class, 'forgetPasswordPost'])->name('forget.password.post');
    Route::get('/reset_password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('reset.password');
    Route::post('/reset_password', [ForgetPasswordManager::class, 'resetPasswordPost'])->name('reset.password.post');
});

<<<<<<< HEAD
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/create', [UserController::class, 'create']);
    Route::get('/user/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::delete('/delete-address/{address}',[UserController::class, 'deleteAddress'])->name('address.delete');
=======
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::post('/store', [UserController::class, 'store']);
    Route::get('/create', [UserController::class, 'create']);
    Route::get('/user/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
>>>>>>> 565adabba8cb7b70602df239b271647cd6000fa8
    Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/get-cities/{provinceId}', [UserController::class, 'getCities'])->name('cities.get');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

});
