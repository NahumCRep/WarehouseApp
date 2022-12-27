<?php

use App\Http\Controllers\AuthController;
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

Route::view('/', 'home')->name('home');
Route::post('/', [AuthController::class, 'login'])->name('login');
Route::view('/registro', 'register')->name('register');
Route::post('/registro', [AuthController::class, 'register'])->name('register_user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/almacenes', 'warehouse.index')->middleware('auth')->name('warehouse');
Route::post('/almacenes', [WarehouseController::class, 'store'])->middleware('auth')->name('warehouse.store');
