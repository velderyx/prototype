<?php

namespace App\Http\Controllers\Items;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('Items.index');
    }
}
