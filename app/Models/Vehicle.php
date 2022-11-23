<?php

namespace App\Models;

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
            ->where('parking_code', 'LIKE', '%'.$search.'%')
            ->orWhere('vehicle_number', 'LIKE', '%'.$search.'%')
            ->orderBy('tickets.clock_in', 'DESC');
    }

    public function scopeReport(Builder $query, $search): Builder
    {
        return $query->with('ticket')
            ->join('tickets', 'vehicles.id', '=', 'tickets.vehicle_id')
            ->where('parking_code', 'LIKE', '%'.$search.'%')
            ->orWhere('vehicle_number', 'LIKE', '%'.$search.'%')
            ->orderBy('tickets.clock_out', 'DESC');
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
