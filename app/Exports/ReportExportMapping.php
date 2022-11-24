<?php

namespace App\Exports;

use App\Models\Vehicle;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReportExportMapping implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Vehicle::with('ticket')->get();
    }

    public function map($row): array
    {
        return [
            $row->ticket->id,
            $row->vehicle_number,
            $row->ticket->parking_code,
            $row->ticket->parking_fee,
            Carbon::parse($row->ticket->clock_in),
            Carbon::parse($row->ticket->clock_out),

        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Vehicle Number',
            'Parking Code',
            'Parking Fee',
            'Clock In',
            'Clock Out'
        ];
    }

}
