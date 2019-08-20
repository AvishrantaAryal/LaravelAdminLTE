@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h3>Review</h3>
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
          <div class="box box-primary" style="margin: 20px">
            <div class="box-header with-border">
              <h3 class="box-title">Feedback</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name"> Name</label>
                  <input type="text" class="form-control" name="rname"  id="rname" placeholder="Enter  Name">
                
                </div>
                <label for="name"> Address</label>
                  <input type="text" class="form-control" name="rname"  id="rname" placeholder="Enter  Address">
                
                </div>

                 
               
                <div class="form-group">
                	  <label for="text">Summary</label>
                  <textarea class="form-control" name="rname"  id="rname" placeholder="Enter  Name">    
                  </textarea>            
                  </div>
                
              
				
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Submit</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
               </div>

		</form>
            </div>
          </div>
          
          <!-- /.box -->
      </div>
</section>



</div>
       
@endsection