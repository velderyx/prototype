<?php

namespace App\Http\Controllers\Items;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Item;

class ItemController extends BaseController
{
    public function index(){
        $items = Item::all();
        return view('Items.index', ['items' => $items]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'itemName' => 'required',
            'name' => 'required',
            'qty' => 'required',
            'date'=> 'required',
            'balance'=> 'required'
        ]);

        $newItem = Item::create($data);

        // notice the difference between routes and view(on index)
        return redirect(route('item.index'));

    }
}
