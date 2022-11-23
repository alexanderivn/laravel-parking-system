<?php

namespace App\Http\Livewire;

use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithPagination;

class ReportTable extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function render()
    {
        $vehicles = Vehicle::report($this->search)
            ->paginate($this->perPage);
        return view('livewire.report-table')
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
