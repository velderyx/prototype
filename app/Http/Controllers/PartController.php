<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class PartController extends Controller
{
    public function index(){
        return view('parts.index');
    }

    public function create(){
        return view('parts.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'mobil' => 'required',
            'plat' => 'required',
            'supplier' => 'required',
            'asuransi' => 'required',
            'tgl'=> 'required'
        ]);

        $newPart = Part::create($data);

        return redirect(route('part.index'));
    }
}
