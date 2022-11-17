<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;

class DashboardController extends Controller
{
    public function index()
    {

        $vehicles = Vehicle::get();
        if (request('search')) {
            $vehicles = Vehicle::where('unique_code', 'like', '%' . request('search') . '%')->get();
        }

        return view('backend.dashboard.index')->with([
            'vehicles' => $vehicles,
        ]);
    }

    public function search()
    {

    }

    public function store(VehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->create([
            'unique_code' => $this->generateBarcodeNumber(),
            'plate_number' => $request->get('plate_number'),
            'clock_in' => $request->get('clock_in'),
        ]);

        return redirect()->back()->with('success', 'Berhasil di tambahkan');
    }

    public function create()
    {
        return view('backend.dashboard.create');
    }

    public function generateBarcodeNumber(): int
    {
        $number = mt_rand(1000000000, 9999999999); // better than rand()

        // call the same function if the barcode exists already
        if ($this->barcodeNumberExists($number)) {
            return $this->generateBarcodeNumber();
        }

        // otherwise, it's valid and can be used
        return $number;
    }

    public function barcodeNumberExists($number): bool
    {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return Vehicle::where('unique_code')->exists();
    }
}