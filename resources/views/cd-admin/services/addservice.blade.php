@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
  ADD SERVVICE
  </h1>
  
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Services</a></li>
        <li class="active">Add Services</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
      
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px">
            <div class="box-header with-border">
              <h3 class="box-title">Add Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action= "{{url('storeservices')}}" enctype="multipart/form-data" method="post">
               {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <div class="alert-warning">{{$errors->first('name')}}</div>
                  <label for="name">Service Name</label>
                  <input type="text" class="form-control" name="name"  id="name" placeholder="Enter service Name">
                
                </div>
                <div class="form-group">
                  <div class="alert-warning">{{$errors->first('service')}}</div>
                    <label for="text">Service Details</label>
                  <textarea name="service" id="summernote" rows="20" cols="80">
                    
                  </textarea>
                </div>
                <div class="form-group">
                  <div class="alert-warning">{{$errors->first('image')}}</div>
                  <label for="exampleInputFile">Image</label>
                  <input type="file" class="form-control" name="image" id="image" placeholder="Choose Image">
              </div>
              <div class="form-group">
                <div class="alert-warning">{{$errors->first('imagealt')}}</div>
                  <label for="imgalt">Image Alt</label>
                  <input type="text" class="form-control" name="imagealt" id="imagealt">
              </div>

             

               
       <div class="form-group">
        <div class="alert-warning">{{$errors->first('status')}}</div>
              <p>Status</p>
                <label>
                  <input type="radio" name="status" class="minimal" value="active">Avialable
                </label>
                <label>
                  <input type="radio" name="status" class="minimal" value="inactive">Not Available
                </label>
        
              </div>
       
              
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Save</button>
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