<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    public function index(){
        $drinks = Drink::with("type", "package" )->get();

        return view("drink", [ "drinks" => $drinks]);
    } 

    public function addDrink(Request $req){
       $input = $req->all();

       $drink = new Drink();
        $drink->drink = $input["drink"];
        $drink->amount = (int)$input["amount"];
        $drink->type_id = ( new TypeController )->getTypeId( $input["type"]);
        $drink->package_id = ( new PackageController )->getPackageId( $input["package"]);

        $drink->save();

       return $drink;
    }
}
