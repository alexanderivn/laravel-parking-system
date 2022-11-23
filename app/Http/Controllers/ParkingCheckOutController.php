<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Services\ParkingService;


class ParkingCheckOutController extends Controller
{
    public function index()
    {
        return view('pages.parking.checkout.index');
    }

    public function store(ParkingService $parkingService, Vehicle $vehicle)//check out
    {
        $parkingService->checkOut($vehicle);
        return to_route('parking-check-out.index');
    }

    public function show(Vehicle $vehicle)
    {
        return view('pages.parking.checkout.show')->with('vehicle', $vehicle);
    }
}
