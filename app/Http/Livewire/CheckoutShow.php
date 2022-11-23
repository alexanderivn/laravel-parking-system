<?php

namespace App\Http\Livewire;

use App\Models\Vehicle;
use Livewire\Component;

class CheckoutShow extends Component
{
    public $payAmount = 0;
    public $payChanges = 0;
    public $total = 0;

    public function render()
    {
        return view('livewire.checkout-show')
            ->layout('components.app.layout');
    }

    public function show(Vehicle $vehicle)
    {
        $vehicle->load('ticket');
        return view('livewire.checkout-show')->with('vehicle', $vehicle);
    }

}
