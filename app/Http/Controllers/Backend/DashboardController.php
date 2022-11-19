<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use App\Services\Dashboard\ParkingService;
use Milon\Barcode\DNS2D;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVehicles = Vehicle::count();

        return view('backend.dashboard.index')->with([
            'totalVehicles' => $totalVehicles,
        ]);
    }
}