@extends('cd-admin.home-master')

@section('page-title')  
Add Admin
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add Admin
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Contact</a></li>
        <li class="active">Contact Form</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
        
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px;">
            <div class="box-header with-border">
               <i class="fa fa-envelope"></i>

              <h3 class="box-title">Add Admin Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{url('storeadmin')}}" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <div class="text text-danger">{{$errors->first('name')}}</div>
                  <input type="text" class="form-control" name="name"  id="name" placeholder="Enter Name">
                
                </div>

                <div class="form-group">
                  <label for="name">Email</label>
                  <div class="text text-danger">{{$errors->first('email')}}</div>
                  <input type="text" class="form-control" name="email"  id="name" placeholder="Enter Email ID">
                
                </div>

                <div class="form-group">
                  <label for="name">Password</label>
                  <div class="text text-danger">{{$errors->first('password')}}</div>
                  <input type="Password" class="form-control" name="password"  id="subject" placeholder="Enter Password">
                
                </div>
                <div class="form-group">
                  <label for="name">Confirm Password</label>
                  <div class="text text-danger">{{$errors->first('cpassword')}}</div>
                  <input type="Password" class="form-control" name="cpassword"  id="subject" placeholder="Confirm Password">
                
                </div>
             

               
       

              </div>
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Save</button>
               </div>

    
            </form>
            <div class="box-footer" style="margin-left: 10px;">
    <a href="{{URL()->previous()}}"><button type="submit" class="btn btn-danger">Cancel</button></a>
          </div>
          </div>
          <!-- /.box -->
      </div>
      
  </div>
</section>



</div>
       
@endsection