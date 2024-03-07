<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function addType(Request $req){
        $input = $req->all();

        $type = new Type();
        $type->type = $input[ "type" ];

        $type->save();
    }

    public function getTypeId( $type ){
        $type = Type::where( "type", $type )->first();
        $id = $type->id;

        return $id;
    }
}
