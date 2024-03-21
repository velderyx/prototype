<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insurance;

class InsuranceController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'names.*' => 'required'
        ]);

       foreach ($data['names'] as $name) { // Retrieve location_id for this part
            $created = insurance::create([
                'name' => $name,
            ]);

            if (!$created) {
                // Log or handle the error
                return redirect()->back()->with('error', 'Failed to save data.');
            }
        }


        return redirect(route('part.create'));
    }
}
