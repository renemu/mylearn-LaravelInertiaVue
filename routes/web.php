<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::inertia('/home', 'Home')->name('home');
Route::inertia('/about', 'About', ['user' => 'Mr Zuli'])->name('about');
Route::inertia('/register', 'Auth/Register')->name('register');
Route::post('/register', [AuthController::class, 'register']);