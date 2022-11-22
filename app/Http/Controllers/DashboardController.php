<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVehicles = Vehicle::count();

        return view('pages.dashboard.index')->with([
            'totalVehicles' => $totalVehicles,
        ]);
    }
}