<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AdminController;

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
//Route::resource('provinces',\App\Http\Controllers\ProvinceController::class);
//Route::resource('hotel',\App\Http\Controllers\ProvinceController::class);
Route::get('/province/{id}',[ProvinceController::class, 'show'])->name('province');
Route::get('/hotel/{id}',[HotelController::class,'show'])->name('hotel');
Route::get('/type-room/{id}',[TypeController::class,'show'])->name('type');
//Route::get('/admin/{id}',[AdminController::class,'show'])->name('profile');
Route::prefix('admin.')->group(function () {
    Route::get('/{id}',[AdminController::class,'show'])->name('profile');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/management',function(){
    $types= \App\Models\Type::all();
    $hotel = \App\Models\Hotel::select('id','name')->get();
    $province=\App\Models\Province::all();
    return view('dashboard.ManagementHotelAndRoom',compact('types','hotel','province'));
})->name('ManagementRoom');
Route::get('/dashboard/infor-user',function(){
    return view('dashboard.infoUser');
})->name('ManagementHotel');
Route::get('/booking', function () {
    return view('payment');
})->name('booking');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
require __DIR__.'/authUser.php';
require __DIR__.'/admin.php';
