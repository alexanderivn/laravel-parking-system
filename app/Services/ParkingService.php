<?php

namespace App\Services;

use App\Http\Requests\CheckInRequest;
use App\Models\Spot;
use App\Models\Ticket;
use App\Models\Vehicle;
use Carbon\Carbon;
use DB;

class ParkingService
{
    public function checkIn(CheckInRequest $request)
    {
        //TODO:: Add try catch
        DB::transaction(function () use ($request, &$vehicle) {
            $vehicle = Vehicle::create([
                'vehicle_number' => $request->get('vehicle_number')
            ]);

            $vehicle->ticket()->create([
                'parking_code' => $this->generateBarcodeNumber(),
                'clock_in' => $request->input('clock_in'),
                'vehicle_id' => Vehicle::latest()->first(),
            ]);
        });

        return $vehicle;
    }

    public function checkOut(Vehicle $vehicle)
    {
        $vehicle->ticket()->update([
            'clock_out' => Carbon::now(),
            'parking_fee' => ParkingService::calculateFee($vehicle->ticket->clock_in),
        ]);

        return $this;
    }

    public static function calculateFee($dateTime)
    {
        $spot = Spot::firstOrCreate();
        $clockIn = Carbon::parse($dateTime);
        $clockOut = Carbon::parse(now());
        $minutes = $clockOut->diffInMinutes($clockIn);
        $min_rate = 3000;
        return $minutes / 60 < 1 ? $spot->min_rate : $minutes / 60 * $spot->rate;
    }

    public function generateBarcodeNumber(): int
    {
        $barcode = mt_rand(1000000000, 9999999999);
        return $this->barcodeNumberExists($barcode)
            ? $this->generateBarcodeNumber() : $barcode;
    }

    public function barcodeNumberExists($number): bool
    {
        return Ticket::where('parking_code')->exists();
    }


}
