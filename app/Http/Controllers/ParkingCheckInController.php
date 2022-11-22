<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckInRequest;
use App\Models\Spot;
use App\Models\Vehicle;
use App\Services\ParkingService;

class ParkingCheckInController extends Controller
{
    public function index()
    {
        $spot = Spot::firstOrCreate();
        $vehicles = Vehicle::with(['ticket'])->get();
        $parkedVehicles = Vehicle::parked()->count();
        $totalAvailable = $spot->space - $parkedVehicles;
        
        return view('pages.parking.checkin.index')
            ->with([
                'vehicles' => $vehicles,
                'spot' => $spot,
                'totalAvailable' => $totalAvailable,
                'parkedVehicles' => $parkedVehicles,
            ]);
    }

    public function store(CheckInRequest $request, ParkingService $parkingService)
    {
        $vehicle = $parkingService->checkIn($request);

        return redirect()->route('parking-check-in.show', $vehicle);
    }

    public function show(Vehicle $vehicle)
    {
        $vehicle->load('ticket');
        return view('pages.parking.checkin.show')->with('vehicle', $vehicle);
    }
}
