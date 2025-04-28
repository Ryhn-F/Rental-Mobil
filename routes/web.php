<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\MobilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/test-db', function () {
    $users = DB::table('users')->get();
    return $users;
});

Route::middleware(['guest'])->group(function(){
    Route::get('/login',[ SesiController::class, 'index'])->name('login');
    Route::post('/login',[ SesiController::class, 'login']);
    Route::get('/register',[SesiController::class, 'register'])->name('register');
    Route::post('/register',[UserController::class, 'register'])->name('register');

});




Route::middleware(['auth'])->group(function(){

    Route::middleware(['userAkses:admin'])->group(function(){
    Route::get('admin', [AdminController::class, 'admin'])->name('admin.dashboard.index');
    Route::resource('admin/mobil', MobilController::class);
    Route::put('admin/mobil/update-image/{id}' , [MobilController::class, 'updateImage'])->name('mobil.updateImage');
    Route::get('message', [BookingController::class, 'index'])->name('Book');

});

    Route::middleware(['userAkses:user'])->group(function(){
    Route::get('home', [UserController::class, 'index'])->middleware('userAkses:user');
    Route::get('detail/{mobil:slug}', [UserController::class, 'detail'])->middleware('userAkses:user')->name('detail');
    Route::get('sewa/{mobil:id}', [UserController::class, 'sewa'])->middleware('userAkses:user')->name('sewa');
    Route::post('sewa', [UserController::class, 'store'])->middleware('userAkses:user')->name('sewa.store');


});
Route::get('/logout', [SesiController::class, 'logout'])->name('logout');

});

