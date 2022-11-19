<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('parking', [VehicleController::class, 'index'])->name('parking.index');
    Route::get('parking/{vehicle}/barcode', [VehicleController::class, 'show'])->name('parking.show');
    Route::post('parking/add', [VehicleController::class, 'store'])->name('parking.store');
});