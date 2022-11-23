<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Vehicle;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVehicles = Vehicle::count();
        $income = Ticket::sum('parking_fee');

        return view('pages.dashboard.index')->with([
            'totalVehicles' => $totalVehicles,
            'income' => $income,
        ]);
    }
}
