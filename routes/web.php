<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class , 'auth'])->name('login');
Route::post('/login',[AuthController::class , 'login'])->name('checkLogin');
Route::get('/register',[AuthController::class , 'registerForm'])->name('register');
Route::post('/register',[AuthController::class , 'register'])->name('checkRegister');
Route::get('/dashboard',[AuthController::class , 'dashboard'])->name('dashboard');