<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index(Warehouse $warehouse, Item $item) {
        // return $item->id ? 'true' : 'false';
        $items = Item::where('warehouse_id', $warehouse->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        if($item->id){
            return view('warehouse.item', ['warehouse' => $warehouse, 'items' => $items, 'item'=>$item]);
        }
        return view('item.index', ['warehouse' => $warehouse, 'items' => $items, 'item'=>'false']);
    }

    public function store(Request $request, Warehouse $warehouse) {

        if($request->input('search') != ''){
            $items = Item::where('name', 'LIKE', "%{$request->input('search')}%")
                ->orWhere('code', 'LIKE', "%{$request->input('search')}%")->paginate(10);
            // return view('warehouse.items', ['warehouse' => $warehouse, 'items' => $items]);
            return view('item.index', ['warehouse' => $warehouse, 'items' => $items]);
        }

        $request->validate([
            'code'=>'required|unique:items,code',
            'stock'=>'required',
            'name'=>'required',
            'warehouse'=>'required'
        ]);

        $item = new Item;
        $item->code         = $request->input('code');
        $item->name         = $request->input('name');
        $item->description  = $request->input('description');
        $item->stock        = $request->input('stock');
        $item->warehouse_id = $request->input('warehouse');
        $item->save();

        // return to_route('warehouse.items', $request->input('warehouse'));
        return to_route('items.index', $request->input('warehouse'));
    }

    public function info(Warehouse $warehouse, Item $item) {
        $items = Item::where('warehouse_id', $warehouse->id)->paginate(10);
        return view('warehouse.item', ['warehouse'=>$warehouse, 'items' => $items, 'item'=>$item]);
    }

   

    public function update(Request $request, Warehouse $warehouse, Item $item) {
        $item->name=$request->input('name');
        $item->code=$request->input('code');
        $item->stock=$request->input('stock');
        $item->description=$request->input('description');

        $item->save();

        // return to_route('warehouse.items', ['warehouse'=>$warehouse]);
        return to_route('items.index', ['warehouse'=>$warehouse]);
    }

    public function delete(Request $request) {
        Item::where('code', $request->input('itemCode'))->delete();
        // return to_route('warehouse.items', $request->input('warehouse'));
        return to_route('items.index', $request->input('warehouse'));
    }
}
