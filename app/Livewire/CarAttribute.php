<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarAttribute extends Component
{
    public $title = 'Mobil';
    public $carsLive;
    public $id_car_edit;

    public function mount($id_car_edit){
        $this->carsLive = Car::orderBy('name')->get();
        $this->id_car_edit = $id_car_edit;
    }

    protected $listeners = ['carsUpdate' => 'updateCars'];


    public function updateCars(){
        $this->carsLive = $this->fetchCars();
    }

    public function fetchCars()
    {
        return Car::orderBy('name')->get();
    }



    public function render()
    {
        return view('livewire.car-attribute');
    }
}
