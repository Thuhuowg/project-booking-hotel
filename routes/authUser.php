<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/login',[\App\Http\Controllers\UserController::class,'login'])->name('login');


Route::post('/login',[UserController::class,'postLogin']);
Route::get('/register',[\App\Http\Controllers\UserController::class,'register'])->name('register');
Route::post('/register',[\App\Http\Controllers\UserController::class,'postRegister']);
Route::get('/logout',[UserController::class,'logout'])->name('logout');
