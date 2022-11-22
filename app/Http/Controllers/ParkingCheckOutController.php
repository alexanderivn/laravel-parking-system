<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class ParkingCheckOutController extends Controller
{
    public function index()
    {
        return view('pages.parking.checkout.index');
    }

    public function store()//check out
    {
    }

    public function show(Vehicle $vehicle)
    {
        return view('pages.parking.checkout.show')->with('vehicle', $vehicle);
    }
}