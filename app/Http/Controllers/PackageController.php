<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function addPackage(Request $req){
        $input = $req->all();

        $package = new Package();
        $package->package = $input["package"];

        $package->save();
    }

    public function getPackageId( $package ){
        $package = Package::where( "package", $package )->first();
        $id = $package->id;

        return $id;
    }
}
