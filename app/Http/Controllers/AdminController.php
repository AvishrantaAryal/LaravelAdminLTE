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
	public function viewservice()
	{
		return view('cd-admin.services.services');
	}
	public function addservice(){
		return view('cd-admin.services.addservice');
	}
	public function viewpackage(){
		return view('cd-admin.package.packages');
	}
	public function addpackage(){
		return view('cd-admin.package.addpackages');
	}
	public function booking(){
		return view('cd-admin.booking.bookings');
	}
	public function addalbum(){
		return view('cd-admin.gallery.addgallery');

	}
	public function viewalbum(){
		return view('cd-admin.gallery.viewgallery');
	}
	public function addimage(){
		return view('cd-admin.gallery.addimage');
	}
	public function viewimage(){
		return view('cd-admin.gallery.imageview');
	}
	public function viewreview(){
		return view('cd-admin.review.review');
	}
	public function addreview(){
	return view('cd-admin.review.addreview');
	}
	public function contact(){
		return view('cd-admin.contact.contact');
	}
	public function aseo()
	{
		return view('cd-admin.seo.aboutseo');
	}
}
