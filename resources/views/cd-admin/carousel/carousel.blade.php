@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
<!-- Content Header (Page header) -->

	 <section class="content-header">
  <h1>
   Carousel
    
  </h1>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Gallery</a></li>
    <li class="active">View Album</li>
  </ol>
</section>


<section class="content" style="padding: 40px;">
	<div class="row">
    <div style="padding-left: 3px;">
    <button>
     <a href="{{url('/addcarousel')}}">Add Carousel</a></button>
   </div>
      @foreach($car as $car)
		<div class="container">
		<img src="{{url('/imageupload/'.$car->image)}}" alt="">
			<div>
		<button class="btn btn-danger"  data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i></button>
    
		
     <a href="{{url('/viewcarousel')}}"><button class="btn btn-default">view</button></a>
		 </div>

</div>
@endforeach




	

</section>
</div>
<style type="text/css">

.container{
width: calc(33% - 6px);
overflow:hidden;
height: fit-content;
margin:3px;
padding: 0;
display:block;
position:relative;
float:left;
}
img{
width: 350px;
height: 350px;
transition-duration: .3s;
max-width: 100%;
display:block;
overflow:hidden;
cursor:pointer;
}
@media only screen and (max-width: 900px) {
.container {
    width: calc(50% - 6px);
}
}
@media only screen and (max-width: 400px) {
.container {
    width: 100%;
}
}
</style>





<div class="modal modal-danger fade" id="modal-danger">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Message from web</h4>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete ?&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline">Yes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
@endsection