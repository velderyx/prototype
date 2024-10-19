<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\location;

class locationAttribute extends Component
{
    public $title = 'location';
    public $locationsLive;
    public $id_location_edit;

    public function mount($id_location_edit){
        $this->locationsLive = location::orderBy('name')->get();
        $this->id_location_edit = $id_location_edit;

    }

    protected $listeners = ['locationsUpdate' => 'updatelocations'];


    public function updatelocations(){
        $this->locationsLive = $this->fetchlocations();
    }

    public function fetchlocations()
    {
        return location::orderBy('name')->get();
    }



    public function render()
    {
        return view('livewire.location-attribute');
    }
}
