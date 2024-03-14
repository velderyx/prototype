<?php

namespace App\Http\Controllers\Items;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Item;

class ItemController extends BaseController
{
    public function index(){
        $items = Item::all();

        $itemsThinnerReducer = Item::where('itemName', 'thinner reducer')
                                    ->orderBy('date', 'asc')
                                    ->get();

        $itemsThinnerA = Item::where('itemName', 'thinner a')
                                    ->orderBy('date', 'asc')
                                    ->get();

        $itemsslow = Item::where('itemName', 'slow')
        ->orderBy('date', 'asc')
        ->get();

        return view('Items.index', ['itemsThinnerReducer' => $itemsThinnerReducer, 'itemsThinnerA' => $itemsThinnerA, 'itemsslow' => $itemsslow, 'items' => $items]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'itemName' => 'required',
            'qty' => 'required',
            'date'=> 'required'
        ]);

        // make variable for switch
        $itemNameSwitch = $request->itemName;
        $nameSwitch = $request->name;
        $qtySwitch = $request->qty;
        $dateSwitch = $request->date;
        switch ($itemNameSwitch) {
            case 'thinner reducer':
                $thinnerReducer = Item::where('itemName', 'thinner reducer')->get();
                Item::create([
                    'itemName' => $itemNameSwitch,
                    'name' => $nameSwitch,
                    'qty' => $qtySwitch,
                    'date' => $dateSwitch
                ]);
                break;
            case 'thinner a':
                $thinnerA = Item::where('itemName', 'thinner a')->get();
                Item::create([
                    'itemName' => $itemNameSwitch,
                    'name' => $nameSwitch,
                    'qty' => $qtySwitch,
                    'date' => $dateSwitch
                ]);
                break;
                case 'slow':
                    $slow = Item::where('itemName', 'slow')->get();
                    Item::create([
                        'itemName' => $itemNameSwitch,
                        'name' => $nameSwitch,
                        'qty' => $qtySwitch,
                        'date' => $dateSwitch
                    ]);
                    break;
            default:
                echo 'Unknown status.';
        }
        $compound2500 = Item::where('itemName', 'Compound 2500')->get();


        // notice the difference between routes and view(on index)
        return redirect(route('item.index'));

    }
}
