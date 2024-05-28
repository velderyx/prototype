<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarFormModal extends Component
{
    public $name;
    public $CarsLive;

    public function storeData()
    {
        // Validate data if needed
        $this->validate([
            'name' => 'required'
        ]);

        // Store the data
        Car::create([
            'name' => $this->name,
        ]);

        // Reset the input field
        $this->name = '';

        $this->updateCar();

        $this->dispatch('showAlertSignal');

    }

    public function updateCar(){
        $this->dispatch('CarsUpdate');
    }

    public function closeModal()
    {
        $this->dispatch('closeModal');
    }

    public function render()
    {
        return view('livewire.Car-form-modal');
    }

}
