@extends('cd-admin.home-master')
@section('page-title')  
About Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  
  <section class="content-header">
    <h1>
      About
    </h1>
   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About</a></li>
        <li class="active">About Details</li>
      </ol>
  </section>

  <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <div class="col-md-12">
        <img src="{{url('imageupload/'.$about->image)}}" alt="" height="300px">
        <h4><strong>
          Name : </strong>{{$about->name}}</h4>
        <h4><strong>
          Tagline : </strong>{{$about->tagline}}</h4>
        </div>
          
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <p><h3><strong>Description :</strong></h3>
            {!!$about->description!!}</p>
          <a href="{{url('fileupload/'.$about->file)}}"><button type="button" class="btn btn-success "><i class="fa fa-file-pdf-o" aria-hidden="true"></i>PDF FILE</button></a>
          <a href="{{$about->video}}"><button type="button" class="btn btn-primary pull-right "><i class="fa-video-camera" aria-hidden="true"></i>Video</button></a>
        </div>

        
      </div>

  </section>
  
  </div>
</div>
@endsection