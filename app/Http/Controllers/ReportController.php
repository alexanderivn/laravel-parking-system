<?php

namespace App\Http\Controllers;

use App\Exports\ReportExportMapping;
use App\Models\Vehicle;

class ReportController extends Controller
{
    public function index()
    {
        return view('pages.report.index');
    }

    public function show(Vehicle $vehicle)
    {
        $vehicle->load('ticket');
        return view('pages.report.show')->with('vehicle', $vehicle);
    }

    public function export()
    {
        return \Excel::download(new ReportExportMapping(), 'report.xlsx');
    }
}
