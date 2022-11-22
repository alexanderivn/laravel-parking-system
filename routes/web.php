<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParkingCheckInController;
use App\Http\Controllers\ParkingCheckOutController;
use App\Http\Controllers\ReportController;
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

//index
//create
//store
//show
//edit
//update
//destroy

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');


    Route::get('parking/', [ParkingCheckInController::class, 'index'])->name('parking-check-in.index');
    Route::post('parking/check-in/add', [ParkingCheckInController::class, 'store'])->name('parking-check-in.store');
    Route::get('parking/check-in/add/{vehicle}',
        [ParkingCheckInController::class, 'show'])->name('parking-check-in.show');

    Route::get('parking/check-out', [ParkingCheckOutController::class, 'index'])->name('parking-check-out.index');
    Route::get('parking/check-out/{vehicle}',
        [ParkingCheckOutController::class, 'show'])->name('parking-check-out.show');


    //Report
    Route::get('report', [ReportController::class, 'index'])->name('report.index');
    Route::get('report/{vehicle}', [ReportController::class, 'show'])->name('report.show');
});
