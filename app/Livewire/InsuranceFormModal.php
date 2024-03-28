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

        // Update the insurancesLive property
        $this->insurancesLive = Insurance::all();

    }

    public function render()
    {
        return view('livewire.insurance-form-modal',
        [
            'insurancesLive' => $this->insurancesLive,
        ]);
    }

    public function updateOptions()
    {
        // Update the options list here (for example, fetch new options from a database)
        $this->insurancesLive = Insurance::all();


        $this->dispatch('postAdded');
    }
}
