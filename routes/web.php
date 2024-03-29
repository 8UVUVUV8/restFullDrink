<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\PackageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get( "/elso/{name}", function($name){ return view("elso", [ "name" => $name]);
});

Route::get( "/index", [ DrinkController::class, "index"]);

Route::view( "/add", "addmod");

route::post( "/newdrink", [DrinkController::class, "addDrink"]);

route::post( "/newtype", [TypeController::class, "addType"]);

route::post( "/newpackage", [PackageController::class, "addPackage"]);