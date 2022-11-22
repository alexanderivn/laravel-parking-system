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
                ->orderBy('clock_in', 'DESC')
                ->orWhere('vehicle_number', 'LIKE', '%'.$search.'%');
        })->with('ticket');
    }

    public function scopeParked(Builder $query): Builder
    {
        return $query->whereHas('ticket', function (Builder $query) {
            $query->where('clock_out', null);
        })->with('ticket');
    }
}
