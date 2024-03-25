<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'names.*' => 'required'
        ]);

       foreach ($data['names'] as $name) { // Retrieve location_id for this part
            $created = Location::create([
                'name' => $name,
            ]);

            if (!$created) {
                // Log or handle the error
                return redirect()->back()->with('error', 'Failed to save data.');
            }
        }


        // $car_id = $request->input('car_id');
        // $plate = $request->input('plate');
        // $supplier_id = $request->input('supplier_id');
        // $insurance_id = $request->input('insurance_id');
        // $status_id = $request->input('status_id');
        // $date = $request->input('date');
        // $description = $request->input('description');
        // return view('parts.create', ['car' => $car_id, 'plate' => $plate, 'supplier' => $supplier_id, 'insurance' => $insurance_id, 'status' => $status_id, 'date' => $date, 'description' => $description]);
        return redirect(route('part.create'));
    }
}
