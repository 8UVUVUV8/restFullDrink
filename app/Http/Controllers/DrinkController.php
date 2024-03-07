<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index(){
        $name = "bela";
        $email = "bela@valami.lan";
        return view( "drink", compact( "name", "email" ) );
    }

    public function newDrink(Request $req){
        echo "<pre>";
        print_r($req->all());
    }
}
