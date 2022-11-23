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
        return $query->whereHas('ticket', function (Builder $query) use ($search) {
            $query->where('parking_code', 'LIKE', '%'.$search.'%')
                ->latest()
                ->orWhere('vehicle_number', 'LIKE', '%'.$search.'%');
        })->with('ticket')
            ->latest();
    }

    public function scopeReport(Builder $query, $search): Builder
    {
        return $query->select('id', 'vehicle_number')
            ->whereHas('ticket', function (Builder $query) use ($search) {
                $query->where('parking_code', 'LIKE', '%'.$search.'%')
                    ->latest()
                    ->orWhere('vehicle_number', 'LIKE', '%'.$search.'%')
                    ->orWhere('clock_out', '!=', null);
            })->with('ticket')
            ->latest();
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
