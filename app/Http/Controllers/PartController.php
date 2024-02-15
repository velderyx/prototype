<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Car;
use App\Models\Insurance;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Builder;

class PartController extends Controller
{
    public function index(){
        $parts = Part::all();
        return view('parts.index', ['parts' => $parts]);
    }

    public function create(){
        $cars = Car::orderBy('name')->get();
        $suppliers = Supplier::orderBy('name')->get();
        $insurances = Insurance::orderBy('name')->get();
        return view('parts.create', ['cars' => $cars, 'suppliers' => $suppliers, 'insurances' => $insurances]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'car_id' => 'required',
            'plate' => 'required',
            'supplier_id' => 'required',
            'insurance_id' => 'required',
            'date'=> 'required'
        ]);

        $newPart = Part::create($data);

        return redirect(route('part.index'));
    }

    public function edit(Part $part){
        $cars = Car::orderBy('name')->get();
        $suppliers = Supplier::orderBy('name')->get();
        $insurances = Insurance::orderBy('name')->get(); 
        return view('parts.edit', ['part' => $part, 'cars' => $cars, 'suppliers' => $suppliers, 'insurances' => $insurances]);
    }

    public function update(Part $part, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'car_id' => 'required',
            'plate' => 'required',
            'supplier_id' => 'required',
            'insurance_id' => 'required',
            'date'=> 'required'
        ]);

        $part->update($data);

        return redirect(route('part.index'))->with('success', 'Part Updated Succesfully');
    }

    public function destroy(Part $part){
        $part->delete();
        return redirect(route('part.index'))->with('success', 'Part Deleted Succesfully');
    }
}
