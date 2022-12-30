<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function storeItem(Request $request) {
        $item = new Item;
        $item->code         = $request->input('code');
        $item->name         = $request->input('name');
        $item->description  = $request->input('description');
        $item->stock        = $request->input('stock');
        $item->warehouse_id = $request->input('warehouse');
        $item->save();

        return to_route('warehouse.items', $request->input('warehouse'));
    }

    public function deleteItem(Request $request) {
        Item::where('code', $request->input('itemCode'))->delete();
        return to_route('warehouse.items', $request->input('warehouse'));
    }
}
