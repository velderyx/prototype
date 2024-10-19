<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\location;

class locationFormModal extends Component
{
    public $name;
    public $insurancesLive;

    public function storeData()
    {
        // Validate data if needed
        $this->validate([
            'name' => 'required'
        ]);

        // Store the data
        location::create([
            'name' => $this->name,
        ]);

        // Reset the input field
        $this->name = '';

        $this->updatelocation();

        $this->dispatch('showAlertSignal');

    }

    public function updatelocation(){
        $this->dispatch('locationsUpdate');
    }

    public function closeModal()
    {
        $this->dispatch('closeModal');
    }

    public function render()
    {
        return view('livewire.location-form-modal');
    }

}
