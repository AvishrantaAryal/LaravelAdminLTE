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
      <div class="col-md-10">
        <!-- general form elements -->
        <div class="box box-primary" style="margin: 20px">
          <button>
     <a href="{{url('/addcarousel')}}">Add Carousel</a></button>
          <div class="box-header with-border">
            <h3 class="box-title">Carousel</h3>
          </div>
          
          @foreach($car as $car)
          <div>
          <img src="{{url('/imageupload/'.$car->image)}}" height="auto" width="100%">
          <diV><pre>
            {{$car->description}}
          <button class="btn btn-success pull-right">Active</button>
          </pre>
          
          
        

        </div>
        @endforeach
        <!-- /.box -->
    </div>

</section>
</div>




@endsection