<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class SupplierAttribute extends Component
{
    public $title = 'Supplier';
    public $suppliersLive;
    public $id_supplier_edit;

    public function mount($id_supplier_edit){
        $this->suppliersLive = Supplier::orderBy('name')->get();
        $this->id_supplier_edit = $id_supplier_edit;

    }

    protected $listeners = ['suppliersUpdate' => 'updateSuppliers'];


    public function updateSuppliers(){
        $this->suppliersLive = $this->fetchSuppliers();
    }

    public function fetchSuppliers()
    {
        return Supplier::orderBy('name')->get();
    }



    public function render()
    {
        return view('livewire.Supplier-attribute');
    }
}
