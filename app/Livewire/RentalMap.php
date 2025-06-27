<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RentalPoint;
use App\Models\Workshop;
use App\Models\Office;

class RentalMap extends Component
{
    public $rentalPoints;
    public $workshops;
    public $offices;

    public function mount()
    {
        $this->rentalPoints = RentalPoint::all();
        $this->workshops = Workshop::all();
        $this->offices = Office::all();
    }

    public function render()
    {
        return view('livewire.rental-map');
    }
}
