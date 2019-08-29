<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Carbon\Carbon;
use Db;

class ContactController extends Controller
{
    public function contact(){
		return view('cd-admin.contact.contact');
	}

	public function replyform(){
		return view('cd-admin.contact.reply');
	}

	public function store(){
    	$data = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required'
    	]);

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        dd($data);
        DB::table('contacts')->insert($final);
        return redirect()->back();

        }
}
