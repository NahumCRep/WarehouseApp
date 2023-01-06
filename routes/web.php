<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// auth pages
Route::view('/', 'home')->name('home');
Route::post('/', [AuthController::class, 'login'])->name('login');
Route::view('/registro', 'register')->name('register');
Route::post('/registro', [AuthController::class, 'register'])->name('register_user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    // warehouse
    Route::get('/almacenes', [WarehouseController::class, 'index'])->name('warehouse');
    Route::post('/almacenes', [WarehouseController::class, 'store'])->name('warehouse.store');
    // warehouse items dashboard 
    // Route::get('/almacenes/{warehouse}/items/{item?}', [WarehouseController::class, 'items'])->name('warehouse.items');
    
    Route::get('/almacenes/{warehouse}/items/{item?}', [ItemController::class, 'index'])->name('items.index');
    Route::post('/almacenes/{warehouse}/items/{item?}', [ItemController::class, 'store'])->name('item.store');
    Route::delete('/almacenes/{warehouse}/items/{item?}', [ItemController::class, 'delete'])->name('warehouse.deleteItem');
    
    Route::get('/almacenes/{warehouse}/item/{item}', [ItemController::class, 'info'])->name('warehouse.item');
    Route::patch('/almacenes/{warehouse}/item/{item}', [ItemController::class, 'update'])->name('warehouse.updateItem');
    
    // warehouse configuration page
    Route::get('/almacenes/{warehouse}/configuracion', [WarehouseController::class, 'configuration'])->name('warehouse.configuration');
    Route::patch('/almacenes/{warehouse}/configuracion', [WarehouseController::class, 'update'])->name('warehouse.updateWarehouse');
    Route::delete('/almacenes/{warehouse}/configuracion', [WarehouseController::class, 'delete'])->name('warehouse.deleteWarehouse');
    
    // Route::post('/almacenes/{warehouse}', [ItemController::class, 'searchItem'])->middleware('auth')->name('item.searchItem');
});
