<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminshow(){
    	 return view('cd-admin.admin.admin');
    }

   
    public function about(){
    return view('cd-admin.about.about');
	 
	 }
	
	
	
	public function booking(){
		return view('cd-admin.booking.bookings');
	}
	
	public function viewreview(){
		return view('cd-admin.review.review');
	}
	public function addreview(){
	return view('cd-admin.review.addreview');
	}
	
	public function aseo()
	{
		return view('cd-admin.seo.aboutseo');
	}
}
