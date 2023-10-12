<?php

use App\Http\Controllers\ProfileController;
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
    $provinces= \App\Models\Province::all();
    return view('welcome', compact('provinces'));
})->name('home');
Route::get('/hotel', function (){
    $provinces = \App\Models\Province::all();
    $hotels=\App\Models\Hotel::all();
    return view('hotel', compact('provinces','hotels'));
})->name('hotel');
Route::get('/hotel/HANZHanoideMaisonGrand',function (){
    $provinces = \App\Models\Province::all();

    $types=\App\Models\Type::all();
    return view('typesList', compact('provinces','types'));
})->name('list');
Route::get('/hotel/HANZHanoideMaisonGrand/PhongDeluxGiuongDoi',function (){
    $provinces = \App\Models\Province::all();
    $hotels=\App\Models\Hotel::all();
    $types=\App\Models\Type::all();
    return view('type', compact('provinces','hotels','types'));
})->name('type');
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/management',function(){
    $provinces = \App\Models\Province::all();
    return view('dashboard.ManagementHotelAndRoom',compact('provinces'));
})->name('ManagementHotel');
Route::get('/dashboard/infor-user',function(){
    $provinces = \App\Models\Province::all();
    return view('dashboard.infoUser',compact('provinces'));
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
