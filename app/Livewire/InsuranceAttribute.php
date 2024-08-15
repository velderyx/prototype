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
    public $title = 'Asuransi';
    public $insurancesLive;
    public $id_insurance_edit;

    public function mount($id_insurance_edit){
        $this->insurancesLive = Insurance::orderBy('name')->get();
        $this->id_insurance_edit = $id_insurance_edit;
    }

    protected $listeners = ['insurancesUpdate' => 'updateInsurances'];


    public function updateInsurances(){
        $this->insurancesLive = $this->fetchInsurances();
    }

    public function fetchInsurances()
    {
        return Insurance::orderBy('name')->get();
    }



    public function render()
    {
        return view('livewire.insurance-attribute');
    }
}
