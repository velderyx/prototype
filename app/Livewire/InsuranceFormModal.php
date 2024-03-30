<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Insurance;

class InsuranceFormModal extends Component
{
    public $name;
    public $insurancesLive;
    public $showModal = false; // Add a property to manage the modal state

    public function storeData()
    {
        // Validate data if needed
        $this->validate([
            'name' => 'required'
        ]);

        // Store the data
        Insurance::create([
            'name' => $this->name,
        ]);

        // Reset the input field
        $this->name = '';

        $this->updateInsurance();

    }

    public function updateInsurance(){
        $this->dispatch('insurancesUpdate');
    }

    public function closeModal(){
        $this->dispatch('closeTheModal');
    }


    public function render()
    {
        return view('livewire.insurance-form-modal');
    }

}
