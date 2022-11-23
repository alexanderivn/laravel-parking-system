<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use App\Models\Ticket;
use App\Models\Vehicle;

class DashboardController extends Controller
{
    public function index()
    {
        //TODO::This is repeating everywhere in controller, we can use composer view instead
        $spot = Spot::firstOrCreate();
        $vehicles = Vehicle::with(['ticket'])->get();
        $parkedVehicles = Vehicle::parked()->count();
        $totalAvailable = $spot->space - $parkedVehicles;
        $income = Ticket::sum('parking_fee');

        return view('pages.dashboard.index')->with([
            'vehicles' => $vehicles,
            'spot' => $spot,
            'totalAvailable' => $totalAvailable,
            'parkedVehicles' => $parkedVehicles,
            'income' => $income,
        ]);
    }
}
