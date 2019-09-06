<?php

namespace App;
use App\Traits\imageTrait;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{	use imageTrait;
    protected $guarded=[];
    
    public function gstore($data)
	{
		$a=[];
		$test = $this->insertimage($data['image']);
		$a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('galleries')->Insert($replace);
        Session::flash('success');
	}

	public function remove($id){
		$ga = DB::table('galleries')->where('id',$id)->get()->first();
        if(file_exists('imageupload/'.$ga->image)) 
    	{
        unlink('imageupload/'.$ga->image);
   		 }

       $img =DB::table('images')->where('gallery_id',$id)->get();
       foreach ($img as $i) {
         if(file_exists('imageupload/'.$i->image)) 
        {
        unlink('imageupload/'.$i->image);
         $img =DB::table('images')->where('gallery_id',$id)->delete();
        }
      }
   		 	DB::table('galleries')->where('id',$id)->delete();
		Session::flash('deletesuccess');
	}




	 public function validationinsert()
	{
  		$request =Request()->all();
  		$data =  Request()->validate([
    	'name' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
    	'image' => 'required|image',
    	'altimage' => 'required',
    	'status'=>'required',
      'title'=>'required|max:60',
      'keywords'=>'required|max:60',
      'sdes'=>'required|max:60'

    	]);
  		return $data;
  	}
}
