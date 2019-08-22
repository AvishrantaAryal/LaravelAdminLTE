@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  ADD REVIEW
  </h1>
   <div class="btn-danger">    
  @if($errors->any())
    @foreach($errors->all() as $e)
      <li>{{$e}}</li>
    @endforeach
@endif
</div>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Review</a></li>
        <li class="active">Add Review</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
        
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px;">
            <div class="box-header with-border">
              <h3 class="box-title">Add Review</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{url('storereview')}}" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="name"> Name</label>
                  <input type="text" class="form-control" name="name"  id="name" placeholder="Enter Name">
                
                </div>
                <div class="form-group">
                  <label for="name"> Address</label>
                  <input type="text" class="form-control" name="address"  id="address" placeholder="Enter Address">
                
                </div>
                <div class="form-group">
                    <label for="text">Message</label>
                  <textarea name="summary" class="form-control"></textarea>
                </div>
                <div class="form-group">
        <p>STATUS</p>
                <label>
                  <input type="radio" name="status" class="minimal" value="active">Active
                </label><br>
                <label>
                  <input type="radio" name="status" class="flat-red" value="inactive">Deactive
                </label>
                
              </div>
       
    
       

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