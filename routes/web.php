<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Driver;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/map', function () {
    return view('map');
});
//students routes
Route::middleware(['auth', 'verified', 'role:1'])
->prefix('student')
    ->name('student.')
    ->group(function() {
        Route::get('/refresh-data', [VoyageController::class,'refresh'])->name('refresh.data');
        Route::get('/timetable', [Student\TimetableController::class, 'index'])
            ->name('timetable');
        });
//driver routes
Route::middleware(['auth', 'verified', 'role:2'])
    ->prefix('driver')
    ->name('driver.')
    ->group(function() {
        Route::get('/refresh-data', [VoyageController::class,'refresh'])->name('refresh.data');
        Route::get('/timetable', [Driver\TimetableController::class, 'index'])
        ->name('timetable');
        Route::get('/travels', [Driver\TimetableController::class, 'travels'])
            ->name('travels');
        Route::resource('voyages',VoyageController::class);
    });
//admin routes
Route::middleware(['auth', 'verified', 'role:3'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function() {
        Route::get('/refresh-data', [VoyageController::class,'refresh'])->name('refresh.data');

        Route::get('/home', [Admin\AdminController::class, 'home'])->name('home');

        Route::resource('buses', BusController::class);
        Route::resource('users', UserController::class);
        Route::resource('voyages',VoyageController::class);
        Route::any('buses/create', [BusController::class, 'create'])
                ->name('buses');


        });


Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });
require __DIR__.'/auth.php';
