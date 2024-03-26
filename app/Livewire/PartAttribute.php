<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Part;
use App\Models\Car;
use App\Models\Insurance;
use App\Models\Supplier;
use App\Models\Status;
use App\Models\Location;

class PartAttribute extends Component
{
    public $count = 0;
    public $section;
    public $carsLive;
    public $suppliersLive;
    public $insurancesLive;
    public $statusesLive;
    public $locationsLive;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function create(){
        return view('parts.create');
    }

    public function mount(){
        $this->carsLive = Car::orderBy('name')->get();
        $this->suppliersLive = Supplier::orderBy('name')->get();
        $this->insurancesLive = Insurance::orderBy('name')->get();
        $this->statusesLive = Status::orderBy('name')->get();
        $this->locationsLive = Location::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.part-attribute');
    }
}
