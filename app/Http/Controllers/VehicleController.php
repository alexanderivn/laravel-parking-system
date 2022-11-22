<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckInRequest;
use App\Models\Vehicle;
use App\Services\ParkingService;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::get();
        $totalVehicles = Vehicle::count();

        return view('pages.parking.index')->with([
            'vehicles' => $vehicles,
            'totalVehicles' => $totalVehicles,
        ]);
    }

    public function show(Vehicle $vehicle)
    {
        return view('pages.parking.barcode')->with('vehicle', $vehicle);
    }

    public function store(CheckInRequest $request, ParkingService $parkingService)
    {
        $vehicle = $parkingService->checkIn($request);

        return redirect()->route('parking.show', $vehicle->id);
    }

}
