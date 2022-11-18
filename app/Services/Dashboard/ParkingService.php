<?php

namespace App\Services\Dashboard;

use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use Carbon\Carbon;

class ParkingService
{
    public function checkIn(VehicleRequest $request)
    {
        return Vehicle::create([
            'unique_code'  => $this->generateBarcodeNumber(),
            'plate_number' => $request->get('plate_number'),
            'clock_in'     => $request->get('clock_in'),
            //            'parking_fee'  => $this->calculateFee(),
        ]);
    }

    public function generateBarcodeNumber(): int
    {
        $number = mt_rand(1000000000, 9999999999);

        return $this->barcodeNumberExists($number)
            ? $this->generateBarcodeNumber() : $number;
    }

    public function barcodeNumberExists($number): bool
    {
        return Vehicle::where('unique_code')->exists();
    }

    public function calculateFee()
    {
        $vehicle = (new Vehicle());
        $clockIn = Carbon::parse($vehicle->clock_in);
        $clockOut = Carbon::parse(now());
        $mins = $clockOut->diffInMinutes($clockIn);
        $rate = 3000;
        $fees = 0;


//        if ($mins / 60 < 1) {
//            $fees = $rate;
//        } else {
//            $fees = $mins / 60 * $rate;
//        }

        return $mins / 60 < 1 ? $fees = $rate : $fees = $mins / 60 * $rate;
    }
}