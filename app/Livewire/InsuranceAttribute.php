<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Part;
use App\Models\Car;
use App\Models\Insurance;
use App\Models\Supplier;
use App\Models\Status;
use App\Models\Location;

class InsuranceAttribute extends Component
{

    public $insurancesLive;

    public function mount(){
        $this->insurancesLive = Insurance::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.insurance-attribute');
    }
}
