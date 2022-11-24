<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{

    protected $fillable = ['vehicle_number'];

    public function ticket(): HasOne
    {
        return $this->hasOne(Ticket::class);
    }

    public function scopeSearch(Builder $query, $search): Builder
    {
        return $query->with('ticket')
            ->join('tickets', 'vehicles.id', '=', 'tickets.vehicle_id')
            ->when($search, fn($query, $search) => $query->where('parking_code', 'like', '%'.$search.'%'))
            ->orderBy('clock_in', 'DESC');
    }

    public function scopeReportFilters(Builder $query, $search, $dateMin, $dateMax): Builder
    {
        return $query->with('ticket')
            ->join('tickets', 'vehicles.id', '=', 'tickets.vehicle_id')
            ->when($search, fn($query, $search) => $query->where('parking_code', 'like', '%'.$search.'%'))
            ->when($dateMin, fn($query, $date) => $query->where('clock_in', '>=', Carbon::parse($date)))
            ->when($dateMax, fn($query, $date) => $query->where('clock_in', '<=', Carbon::parse($date)))
            ->where('clock_out', '!=', null)
            ->orderBy('clock_in', 'DESC');
    }

    public function scopeParked(Builder $query): Builder
    {
        return $query->whereHas('ticket', function (Builder $query) {
            $query->latest()
                ->where('clock_out', null);
        })->with('ticket')
            ->latest();
    }

}
