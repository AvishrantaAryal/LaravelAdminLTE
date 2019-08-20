@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add Album</h1>
    
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Gallery</a></li>
      <li class="active">Add Album</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" style="margin-top: 20px">
          <div class="box-header with-border">
            <h3 class="box-title">Add Album</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="name">Album Name</label>
                <input type="text" class="form-control" name="cimage"  id="cimage" placeholder="Enter Album Name">
              
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image for Album</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="Choose Image">
            </div>
            <div class="form-group">
                <label for="imgalt">Alternative Image Text </label>
                <input type="text" class="form-control" name="imagealt" id="imagealt" placeholder="Alternative Image Text">
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
        </div>
        
        <!-- /.box -->
    </div>

</section>
</div>


@endsection
