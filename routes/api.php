<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Rute untuk registrasi pengguna baru
Route::post('register', [AuthController::class, 'register']);

// Rute untuk login pengguna
Route::post('login', [AuthController::class, 'login']);

// Rute untuk logout, menggunakan middleware untuk autentikasi
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);
