<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('spawn');
});

Route::name('user.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm']);
    Route::post('/login_process', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm']);
    Route::post('/register_process', [AuthController::class, 'register']);
});