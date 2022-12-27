<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarehouseController extends Controller
{
    //
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
}
