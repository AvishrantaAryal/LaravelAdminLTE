<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Knowabout;


class AboutController extends Controller
{
    public function store(){
    	$request=Request()->all();
    	Request()->validate([
    		'name'=>'required',
    		'description'=>'required',
    		'image'=>'required|mimes:jpg,png',
    		'imagealt'=>'required',
    		'file'=>'required|mimes:pdf',
    		'video'=>'required',
    	]);
    	$about = new Knowabout;
    	$about->name=$request->name;
    	$about->desscription=$request->description;
    	$about->image=$request->image;
    	$about->imagealt=$request->imagealt;
    	$about->file=$about->file;
    	$about->video=$about->about;

    	if($request->image)
        {
         $file= $request->image;
         $filename = $file->getClientOriginalName();
         $destinationPath="image_upload";
         $file->move($destinationPath,$filename);
         $about->image = $filename;
    
         }
         $about->save();
         return redirect('/about');


    }
    public function view(){
    	$abouts=Knowabout::all();
        return view('cd-admin.about.about',compact('about'));
    }
    public function edit($id)
     {
         if($abouts=Knowabout ::where ('id',$id)->get()->first())
         {
             return view('edit',compact('about'));
         }
     }
}
