<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//Route::get('/{id}',\App\Http\Controllers\AdminController::class,'show')->name('id_admin');
//Route::middleware('auth')->group(function () {
//    Route::get('/list-room')->name('room_list');
//});
Route::get('/list-room',function (){
    $types = \App\Models\Type::all();
    return view('dashboard.listRoom',compact('types'));
})->name('room_list');
Route::post('/create-room', [\App\Http\Controllers\TypeController::class,'store'])->name('create-type');
