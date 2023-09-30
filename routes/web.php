<?php

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
    $provinces = \App\Models\Province::all();
    return view('welcome', compact('provinces'));
})->name('home');
Route::get('/hotel', function (){
    $provinces = \App\Models\Province::all();
    return view('hotel', compact('provinces'));
})->name('hotel');
Route::get('/dashboard ',function(){
    $provinces = \App\Models\Province::all();
    return view('dashboard.fe', compact('provinces'));
})->name('dashboard');
Route::get('Quanly',function(){
    $provinces = \App\Models\Province::all();
    return view('dashboard.ManagementHotelAndRoom',compact('provinces'));
})->name('ManagementHotel');
