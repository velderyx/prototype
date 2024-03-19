<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

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
}
