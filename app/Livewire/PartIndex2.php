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

class PartIndex2 extends Component
{
    public function render()
    {
        return view('livewire.part-index2');
    }
}
