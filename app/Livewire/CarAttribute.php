<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarAttribute extends Component
{
    public $title = 'Asuransi';
    public $CarsLive;

    public function mount(){
        $this->CarsLive = Car::orderBy('name')->get();
    }

    protected $listeners = ['CarsUpdate' => 'updateCars'];


    public function updateCars(){
        $this->CarsLive = $this->fetchCars();
    }

    public function fetchCars()
    {
        return Car::orderBy('name')->get();
    }



    public function render()
    {
        return view('livewire.Car-attribute');
    }
}
