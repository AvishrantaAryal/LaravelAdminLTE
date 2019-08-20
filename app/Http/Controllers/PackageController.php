<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function viewpackage(){
		return view('cd-admin.package.packages');
	}

	public function addpackage(){
		return view('cd-admin.package.addpackages');
	}



}
