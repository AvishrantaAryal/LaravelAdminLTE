<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use Session;
use App\Mail\quick;
use App\BookingReply;
use App\BookingStatus;
use App\Bookings;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function dashboard(){
    	$test =	DB::table('quick_mails')->orderBy('id', 'DESC')->take(5)->get();
    	$packages=DB::table('packages')->get();
        $book=DB::table('booking_statuses')->get();
    	$pak=count($packages);


    	$book = DB::table('bookings')->get();
    	$reply = DB::table('booking_replies')->get();
    	$count = 0;
    	$acc = 0;
    	$rej = 0;

    	foreach($book as $b){
    	$reply = DB::table('booking_replies')->where('contact_id',$b->id)->get();
    	foreach($reply as $r){

    		if($r->contact_id==$b->id)
    		{	if($r->status=='accepted'){
    			$acc++;


    		}else{
    			$rej++;

    		}
    		}
    		else
   			{	
    			$count++;
   			 }

   			}

    		$count++;
    		$a = $count;
    		$accepted = $acc;
    		$rejected = $rej;
    		$booking = $a-$accepted-$rejected;    	
    }
    	return view('cd-admin.home.home',compact('test','booking','rejected','accepted','pak'));
    }

    public function view(){
    	$t =	DB::table('quick_mails')->orderBy('id', 'DESC')->paginate(1);
    	return view('cd-admin.home.mails',compact('t'));
    }

    public function mail(){
    	$data = request()->validate([
    		'email' => 'required|email',
    		'subject'=>'required',
    		'message' => 'required'
    	]);

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('quick_mails')->insert($final);
        Mail::to($data['email'])->send(new quick($data));
        Session::flash('success');

      	return redirect('/');
    }

    public function del($id){
    	 DB::table('quick_mails')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('view-all-mails');
    }


}
