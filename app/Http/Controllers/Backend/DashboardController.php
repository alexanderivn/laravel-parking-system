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
        $vehicles = Vehicle::get();
        $totalVehicles = Vehicle::count();

        if (request('search')) {
            $vehicles = Vehicle::where('unique_code', 'like',
                '%'.request('search').'%')->get();
        }

        return view('backend.dashboard.index')->with([
            'vehicles'      => $vehicles,
            'totalVehicles' => $totalVehicles,
        ]);
    }


    public function store(
        VehicleRequest $request,
        ParkingService $parkingService
    ) {
        $parkingService->checkIn($request);

        return redirect()->back()->with([
            'success' => 'Berhasil di tambahkan',
        ]);
    }

    public function create()
    {
        return view('backend.dashboard.create');
    }


}