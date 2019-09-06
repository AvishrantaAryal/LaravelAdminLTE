<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class AdminController extends Controller
{
    public function adminshow(){
    			$admin=DB::table('users')->get();
    	return view('cd-admin.admin.admin',compact('admin'));

    }

}
