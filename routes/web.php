<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\SupplierController;
use Facade\FlareClient\View;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function(){
    return view('template.index');
});

Route::get('/form', function(){
    return view('template.form');
});

Route::resource('/supplier', SupplierController::class);
Route::resource('/sparepart', SparepartController::class);
Route::resource('/mechanic', MechanicController::class);
Route::resource('/customer', CustomerController::class);
Route::resource('/jasa', JasaController::class);
