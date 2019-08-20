@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add Careousel</h1>
     @if($errors->any())
    @foreach($errors->all() as $e)
      <li>{{$e}}</li>
    @endforeach
@endif
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
          <form role="form" method="post" action= "{{url('update'.$carousel->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label for="name">Carousel Name</label>
                <input type="text" class="form-control" name="name"  id="name" placeholder="Enter Carousel Name" value={{old('name')}}>
              
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image for Carousel</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="Choose Image" >
            </div>
            <div class="form-group">
                <label for="imgalt">Alternative Image Text </label>
                <input type="text" class="form-control" name="alt" id="alt" placeholder="Alternative Image Text" value={{old('alt')}}>
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                 <textarea name="description" id="summernote" rows="20" cols="80">
                    
                  </textarea>
              
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
