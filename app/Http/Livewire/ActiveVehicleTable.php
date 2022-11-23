<?php

namespace App\Http\Livewire;

use App\Models\Vehicle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ActiveVehicleTable extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 15;
    public $vehicle;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function render(): Factory|View|Application
    {
        $vehicles = Vehicle::search($this->search)
            ->paginate($this->perPage);

        return view('livewire.active-vehicle-table')
            ->with([
                'vehicles' => $vehicles,
            ]);
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function show(Vehicle $vehicle)
    {
        $vehicle->load('ticket');
        return view('pages.report.show')->with('vehicle', $vehicle);
    }
}
