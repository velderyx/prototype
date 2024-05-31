<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class SupplierFormModal extends Component
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
        Supplier::create([
            'name' => $this->name,
        ]);

        // Reset the input field
        $this->name = '';

        $this->updateSupplier();

        $this->dispatch('showAlertSignal');

    }

    public function updateSupplier(){
        $this->dispatch('suppliersUpdate');
    }

    public function closeModal()
    {
        $this->dispatch('closeModal');
    }

    public function render()
    {
        return view('livewire.supplier-form-modal');
    }

}
