<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Faker\Core\Number;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');
    }

    public function store(Request $request)
    {

        $request->validate([
            'names.*' => 'required', // Validate each name field
            'town' => 'required', // Validate the town field
        ]);


        // Store the town
        $town = $request->input('town');

        // Store each name in the database
        foreach ($request->input('names') as $name) {
            $created = Test::create([
                'name' => $name,
                'town' => $town,
            ]);

            if (!$created) {
                // Log or handle the error
                return redirect()->back()->with('error', 'Failed to save data.');
            }
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data saved successfully!');
    }

    public function findSumCombination(){
        $arr1 = [
            1,
            2,
            5,
            5,
            6,
            7,
            8,
        ];

        $target = 13;

    }

    public $array = [22,25,35,67,99,44];

    public 
    function findCombination($array, $target){
        $target =  104;
        $result = [];
        foreach($array as $number){
            if ($target > array_sum($result)){
                array_push($result, $number);
            }
            else{
                continue;
            }
        }

        if (array_sum($result) == $target){
        echo "Combination found: " . implode(', ', $result);
        }
        else{
        echo "No combination found with target " . implode(', ', $result);
        }
    }
}
