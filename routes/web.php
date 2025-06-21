<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(AdminController::class)->group(function() {
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/admin/edit','edit')->name('admin.edit');
    Route::post('/admin/store','store')->name('admin.store');
    Route::get('/change/password','changePassword')->name('change.password');
    Route::get('/password/update','updatePassword')->name('update.password');
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
});

Route::controller(SliderController::class)->group(function() {
    Route::get('/slider', 'slider')->name('slider');
    Route::post('/update/slider', 'updateSlider')->name('update.slider');
});

Route::controller(AboutController::class)->group(function() {
    Route::get('/about','about')->name('about.page');
});

require __DIR__.'/auth.php';