<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Warehouse;
use App\Models\WarehouseView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarehouseController extends Controller
{
    //
    public function index() {
        $user = Auth::user();
        $warehouses = WarehouseView::where('owner', $user->email)->get();
        
        return view('warehouse.index', ['warehouses'=>$warehouses]);
    }

    public function store(Request $request) {
        $user = Auth::user();
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'description'=>'required',
        ]);

        $warehouse = new Warehouse;
        $warehouse->name = $request->input('name');
        $warehouse->location = $request->input('location');
        $warehouse->description = $request->input('description');
        $warehouse->owner = $user->email;
        $warehouse->save();
        
        return to_route('warehouse');
    }

    public function show(Warehouse $warehouse) {
        $items = Item::where('warehouse_id', $warehouse->id)->get();
        return view('warehouse.items', ['warehouse' => $warehouse, 'items' => $items]);
    }

    public function configuration(Warehouse $warehouse) {
        return view('warehouse.configuration', ['warehouse'=>$warehouse]);
    }

    public function update(Request $request, Warehouse $warehouse) {
        $request->validate([
            'name'          =>'required',
            'location'      =>'required',
            'description'   =>'required'
        ]);

        $warehouse->name        = $request->input('name');
        $warehouse->location    = $request->input('location');
        $warehouse->description = $request->input('description');

        $warehouse->save();

        return to_route('warehouse.configuration', $warehouse->id);
    }

    public function delete(Request $request, Warehouse $warehouse) {
        // $request->validate([
        //     'deleteName' => 'required|same:'.$warehouse->name
        // ]);
        $name = $request->input('deleteName');
        if($name !== $warehouse->name){
            return redirect()->back()->withInput()->withErrors(['deleteName' => 'El nombre no coincide']);
        }

        $warehouse->delete();
        // Warehouse::where('id', $warehouse->id)->delete();

        return to_route('warehouse');
    }
}
