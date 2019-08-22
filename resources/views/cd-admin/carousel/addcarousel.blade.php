@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add Careousel</h1>
  
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Carousel</a></li>
      <li class="active">Add Carousel</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      
        
      
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" style="margin-top: 20px">
          <div class="box-header with-border">
            <h3 class="box-title">Add Carousel</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action= "{{url('storecarousel')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                                <div class="alert-warning">{{$errors->first('name')}}</div>
                <label for="name">Carousel Name</label>
                <input type="text" class="form-control" name="name"  id="name" placeholder="Enter Carousel Name">
              
              </div>
              <div class="form-group">
                                <div class="alert-warning">{{$errors->first('image')}}</div>
                <label for="exampleInputFile">Image for Carousel</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="Choose Image">
            </div>
            <div class="form-group">
                              <div class="alert-warning">{{$errors->first('alt')}}</div>
                <label for="imgalt">Alternative Image Text </label>
                <input type="text" class="form-control" name="alt" id="alt" placeholder="Alternative Image Text">
            </div>
            <div class="form-group">
                              <div class="alert-warning">{{$errors->first('description')}}</div>
                <label for="name">Description</label>
                 <textarea name="description" id="summernote" rows="20" cols="80">
                    
                  </textarea>
              
              </div>
                 
       <div class="form-group">
        <p>Status</p>
                <label>
                  <input type="radio" name="status" class="minimal" value="active">Active
                </label>
                <label>
                  <input type="radio" name="status" class="minimal" value="inactive">Deactive
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
