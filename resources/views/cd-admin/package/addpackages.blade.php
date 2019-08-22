@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  ADD PACKAGES
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Packages</a></li>
        <li class="active">Add Packages</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
        
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px;">
            <div class="box-header with-border">
              <h3 class="box-title">Add Packages</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{url('storepackages')}}" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Package Name</label>
                  <div class="text text-danger">{{$errors->first('name')}}</div>
                  <input type="text" class="form-control" name="name"  id="name" placeholder="Enter package Name">
                
                </div>
                <div class="form-group">
                    <label for="text">Package Details</label>
                    <div class="text text-danger">{{$errors->first('package')}}</div>
                  <textarea name="package" id="summernote" rows="20" cols="80">
                    
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="text text-danger">{{$errors->first('image')}}</div>
                  <input type="file" class="form-control" name="image" id="image" placeholder="Choose Image">
              </div>
              <div class="form-group">
                  <label for="imgalt">Image Alt</label>
                  <div class="text text-danger">{{$errors->first('imagealt')}}</div>
                  <input type="text" class="form-control" name="imagealt" id="imagealt">
              </div>

             

               
       <div class="form-group">
        <p>Status</p>
        <div class="text text-danger">{{$errors->first('status')}}</div>
                <label>
                  <input type="radio" name="status" class="minimal" value="active">Available
                </label>
                <label>
                  <input type="radio" name="status" class="minimal" value="inactive">Not Available
                </label>
                
              </div>
       

              </div>
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Add</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
               </div>

    
            </form>
          </div>
          <!-- /.box -->
      </div>
      
  </div>
</section>



</div>
       
@endsection