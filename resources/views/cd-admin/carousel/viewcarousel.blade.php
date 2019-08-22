@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
<!-- Content Header (Page header) -->

	 <section class="content-header">
  <h1>
   Images
    
  </h1>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Carousel</a></li>
    <li class="active">View Carousel</li>
  </ol>
</section>


 <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
     <a href="{{url('/addcarousel')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">Add Carousel</button></a>
          <div class="box-header with-border">
            <h3 class="box-title">Carousel</h3>
          </div>
          
          @foreach($car as $car)
          <div>
            <div>
          @if($car->status=='active')
                      <div class="btn btn-success">Active</div>
                    @else
                    <div class="btn btn-danger">Inactive</div>
                    @endif
        </div>
           <center>
          <img src="{{url('/imageupload/'.$car->image)}}" height="400px;">
        </center>
          <diV><pre>
            Carousel Description :{{$car->description}} 
            
          </pre>

        </diV>
        
          
          
        

        </div>
        @endforeach
        <!-- /.box -->
    </div>

</section>
</div>




@endsection