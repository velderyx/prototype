<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Car;
use App\Models\Insurance;
use App\Models\Supplier;
use App\Models\Status;
use App\Models\Location;
use App\Models\Log;
use Livewire\Livewire;
use App\Livewire\ToastNotification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;

class PartController extends Controller
{
    public function index(){
        $parts = Part::all();
        return view('parts.index', ['parts' => $parts]);
    }

    public function index2(){
        $parts = Part::all();
        return view('parts.index2', ['parts' => $parts]);
    }

    public function logs(){
        $logs = Log::where('old', '!=', 'new')
        ->whereIn('new', ['2'])
        ->orderBy('date', 'asc') // or 'desc' for descending order
        ->get();
        return view('parts.logs', ['logs' => $logs]);
    }

    public function create(){
        $cars = Car::orderBy('name')->get();
        $suppliers = Supplier::orderBy('name')->get();
        $insurances = Insurance::orderBy('name')->get();
        $statuses = Status::orderBy('name')->get();
        $locations = Location::orderBy('name')->get();


        $test = session('test');
        return view('parts.create', ['test' => $test,'cars' => $cars, 'suppliers' => $suppliers, 'insurances' => $insurances, 'statuses' => $statuses, 'locations' => $locations, 'attribute' => 'qqqq']);
    }

    public function sendAlert(string $type, string $message): void //alert for berhasil disimpan
    {
        session()->push('alerts', ['type' => $type, 'message' => $message]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'names.*' => 'required',
            'car_id' => 'required',
            'plate' => 'required',
            'supplier_id' => 'required',
            'insurance_id' => 'required',
            'status_id' => 'required',
            'location_ids.*' => 'required',
            'date'=> 'required',
            'date_out' => 'nullable',
            'description' => 'nullable'
        ]);

        $car_id = $request->input('car_id');
        $plate = $request->input('plate');
        $supplier_id = $request->input('supplier_id');
        $insurance_id = $request->input('insurance_id');
        $status_id = $request->input('status_id');
        $date = $request->input('date');
        $description = $request->input('description');


        foreach ($data['names'] as $key => $name) {
            $location_id = $data['location_ids'][$key]; // Retrieve location_id for this part
            $created = Part::create([
                'name' => $name,
                'car_id' => $car_id,
                'plate' => $plate,
                'supplier_id' => $supplier_id,
                'insurance_id' => $insurance_id,
                'status_id' => $status_id,
                'location_id' => $location_id,
                'date' => $date,
                'date_out' => null,
                'description' => $description,
            ]);

            if (!$created) {
                // Log or handle the error
                return redirect()->back()->with('error', 'Failed to save data.');
            }
        }

        $this->sendAlert('success', 'message');

        return redirect(route('part.index'));

    }

    public function edit(Part $part){
        $cars = Car::orderBy('name')->get();
        $suppliers = Supplier::orderBy('name')->get();
        $insurances = Insurance::orderBy('name')->get();
        $statuses = Status::orderBy('name')->get();
        $locations = Location::orderBy('name')->get();
        return view('parts.edit', ['part' => $part, 'cars' => $cars, 'suppliers' => $suppliers, 'insurances' => $insurances, 'statuses' => $statuses, 'locations' => $locations]);
    }

    public function update(Part $part, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'car_id' => 'required',
            'plate' => 'required',
            'supplier_id' => 'required',
            'insurance_id' => 'required',
            'status_id' => 'required',
            'location_id' => 'required',
            'date'=> 'required',
            'date_out'=> 'required',
            'description' => 'nullable'
        ]);

        // Retrieve the original part from the database
        $partFromDatabase = Part::find($part->id);

        // get current date
        $currentDate = date('Y-m-d');

        $statusOld = $partFromDatabase->status_id;
        $statusNew = $request->input('status_id');
        $status_id = $request->input('status_id');
        if ($status_id != $partFromDatabase->status_id) {

            Log::create([
                'date' => $currentDate,
                'part_id' => $part->id,
                'old' => $statusOld,
                'new' => $statusNew
            ]);
        }
        else
        // Update the part with the new data
        $part->update($data);

        // Redirect the user to the index route for parts with success message
        return redirect(route('part.index'));
    }

    public function changeStatus(Part $part){

        $currentDate = date('Y-m-d');
        $part->update([
            'status_id' => 2,
            'date_out' => $currentDate,
        ]);

        Log::create([
            'date' => $currentDate,
            'part_id' => $part->id,
            'old' => '1',
            'new' => '2'
        ]);

        return redirect(route('part.index'))->with('success', 'edited');
    }

    public function destroy(Part $part){
        // $part->delete(); this is for delete from database
        $currentDate = date('Y-m-d');
        $part->update([
            'status_id' => 3,
            'date_out' => $currentDate,
        ]);

        Log::create([
            'date' => $currentDate,
            'part_id' => $part->id,
            'old' => '2',
            'new' => '3'
        ]);

        return redirect(route('part.index'))->with('success', 'deleted');
        // return redirect(route('part.index'))->with('success', 'Part Deleted Succesfully');
    }
}
