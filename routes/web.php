<?php

use App\Http\Controllers\LandcoverController;
use App\Http\Controllers\PotentialareasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RainfallController;
use App\Http\Controllers\TemperatureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemController;
use App\Http\Controllers\SoilController;
use App\Http\Controllers\SlopeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboards');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/potential/areas', [PotentialareasController::class, 'index'])->middleware(['auth', 'verified'])->name('potentialarea.index');


Route::get('/potential/areas/temperature', [TemperatureController::class, 'index'])->middleware(['auth', 'verified'])->name('temperature.index');

Route::get('/potential/areas/rainfall', [RainfallController::class, 'index'])->middleware(['auth', 'verified'])->name('railfall.index');

Route::get('/landcover', [LandcoverController::class, 'index'])->middleware(['auth', 'verified'])->name('landcover.index');

Route::get('/dem', [DemController::class, 'index'])->middleware(['auth', 'verified'])->name('dem.index');

Route::get('/soil', [SoilController::class, 'index'])->middleware(['auth', 'verified'])->name('soil.index');

Route::get('/slope', [SlopeController::class, 'index'])->middleware(['auth', 'verified'])->name('slope.index');
