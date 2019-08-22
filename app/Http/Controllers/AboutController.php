<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Knowabout;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\DB;
class AboutController extends Controller
{   
    use imageTrait;
    
    public function about(){
        return view('cd-admin.about.aboutform');
    }

    public function aboutshow(){
             $about = DB::table('knowabouts')->get();
        return view('cd-admin.about.aboutshow',compact('about'));
    }
         public function aboutstore(){
        $request = Request()->all();
        $vald = $this->validateRequest();
        $about = new Knowabout;
        $about['name'] = $request['name'];
        $about['tagline'] = $request['tagline'];
        $img = $this->insertimage($request['image']);
        $about['image']= $img;
        $about['altimage'] = $request['altimage'];
        $about['description'] = $request['description'];
        $pdf = $this->insertfile($request['pdf']);
        $about['file'] = $pdf;
        $about['video'] = $request['video'];
         $about->save();
         return redirect('/aboutshow');
    
    }
    public function aboutupdate($id){
        $request = Request()->all();
        $vald = $this->uvalidateRequest();
        $about = Knowabout::where('id',$id)->get()->first();
        $about['name'] = $request['name'];
        $about['tagline'] = $request['tagline'];
        if(request())
    }




      public function validateRequest(){
        return Request()->validate([
            'name' => 'required',
            'tagline' => 'required',
            'altimage' => 'required',
            'description' => 'required',
            'video' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,JPEG,JPG,PNG',
            'pdf' => 'required|mimes:pdf',
        ]);
    }
}