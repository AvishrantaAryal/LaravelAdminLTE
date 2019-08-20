<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;

class CarouselController extends Controller
{
	use imageTrait;
	public function carousel(){
    	$car = Carousel::all();
        return view('cd-admin.carousel.carousel',compact('car'));
    }
      
    public function viewcarousel(){
    	$car=Carousel::all();
    	 return view('cd-admin.carousel.viewcarousel',compact('car'));
    }
    public function addcarousel(){
    	 return view('cd-admin.carousel.addcarousel');
    }

    public function store(){
    	$request=Request()->all();
    	//dd($request);
    	Request()->validate([
    		'name'=>'required',
    		'description'=>'required',
    		'image'=>'required|mimes:jpg,png,jpeg',
    		'alt'=>'required',
    		'status'=>'required',
    		
    	]);

    	$car = new Carousel;
    	$car['name']=$request['name'];
    	$car['description']=$request['description'];
    	$img = $this->insertimage($request['image']);
    	$car['image']=$img;
    	$car['imagealt']=$request['alt'];
    	$car['status']=$request['status'];
    	


    	
         $car->save();
         return redirect('/carousel');


    }
    public function edit($id)
     {
         if($carousel=Carousel ::where ('id',$id)->get()->first())
         {
             return view('edit',compact('carousel'));
         }
     }
    
    

}
