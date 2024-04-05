<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Car;
use App\Models\Insurance;
use App\Models\Supplier;
use App\Models\Status;
use App\Models\Location;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;

class PartIndex extends Component
{
    public $parts;
    public $statusFilter = '1'; // Default to show parts with status 1

    public function mount()
    {
        $this->fetchParts();
    }

    public function fetchParts()
    {
        $this->parts = Part::where('status_id', $this->statusFilter)->get();
    }

    public function render()
    {
        return view('livewire.part-index');
    }
}
