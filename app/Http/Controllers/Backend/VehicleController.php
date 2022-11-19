<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use App\Services\Dashboard\ParkingService;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::get();
        $totalVehicles = Vehicle::count();

        if (request('search')) {
            $vehicles = Vehicle::where(
                'unique_code',
                'like',
                '%'.request('search').'%'
            )->get();
        }

        return view('backend.parking.index')->with([
            'vehicles' => $vehicles,
            'totalVehicles' => $totalVehicles,
        ]);
    }

    public function show(Vehicle $vehicle)
    {
        return view('backend.parking.barcode')->with('vehicle', $vehicle);
    }

    public function store(VehicleRequest $request, ParkingService $parkingService)
    {
        $vehicle = $parkingService->checkIn($request);

        return redirect()->route('parking.show', $vehicle->id);
    }

}