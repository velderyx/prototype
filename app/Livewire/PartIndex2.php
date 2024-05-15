<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Part;

class PartIndex2 extends Component
{
    public $parts;
    public function mount()
    {
        $this->fetchParts();
    }

    public function fetchParts()
    {
        $this->parts = Part::where('status_id', '2')
                   ->orderBy('date')
                   ->get();
    }

    public function render()
    {
        return view('livewire.part-index2');
    }
}
