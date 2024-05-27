<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route to display the login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route to handle login form submission
Route::post('/login', [AuthController::class, 'login']);

// Route to display the registration form
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Route to handle registration form submission
Route::post('/register', [AuthController::class, 'register']);

// Route to display the forgot password form
Route::get('/forgot_password', [AuthController::class, 'showForgotForm'])->name('forgot_password');

// Route to handle forgot password form submission
Route::post('/forgot_password', [AuthController::class, 'forgotPassword']);

Route::get('/home',[AuthController::class, 'home'])->name('home');

Route::get('/logout', [AuthController::class,'Logout'])->name('logout');