<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Car;

class PartController extends Controller
{
    public function index(){
        $parts = Part::all();
        return view('parts.index', ['parts' => $parts]);
    }

    public function create(){
        $cars = Car::all();
        return view('parts.create', ['cars' => $cars]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'car_id' => 'required',
            'plate' => 'required',
            'supplier' => 'required',
            'insurance' => 'required',
            'date'=> 'required'
        ]);

        $newPart = Part::create($data);

        return redirect(route('part.index'));
    }

    public function edit(Part $part){
        $cars = Car::all();
        return view('parts.edit', ['part' => $part], ['cars' => $cars]);
    }

    public function update(Part $part, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'car_id' => 'required',
            'plate' => 'required',
            'supplier' => 'required',
            'insurance' => 'required',
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
