<?php

namespace App\Http\Controllers\Items;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Item;

class ItemController extends BaseController
{
    public function index(){
        $distinctItemNames = Item::distinct()->pluck('itemName');

        // Initialize an array to store items grouped by item name
        $itemsByItemName = [];

        // Fetch items for each distinct item name
        foreach ($distinctItemNames as $itemName) {
            $itemsByItemName[$itemName] = Item::where('itemName', $itemName)
                                               ->orderBy('date', 'asc')
                                               ->get();
        }
        return view('Items.index', ['itemsByItemName' => $itemsByItemName]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'itemName' => 'required',
            'qty' => 'required',
            'date' => 'required',
        ]);

        // Create the item using the validated data
        Item::create([
            'itemName' => $data['itemName'],
            'name' => $request->name ?? null,
            'qty' => $data['qty'],
            'date' => $data['date'],
        ]);

        // Redirect to the index route
        return redirect()->route('item.index');
    }

}
