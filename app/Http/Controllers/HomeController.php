<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Car;
use App\Models\Insurance;
use App\Models\Supplier;

class HomeController extends Controller
{
    public function dashboard(){
        $parts = Part::all();
        return view('dashboard', ['parts' => $parts]);
    }
}
