@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <h1>
  Review
 </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Review</a></li>
      <li class="active">View Review</li>
    </ol>
  </section>

  <section class="content">
  
<div class="row" style="padding: 5px;">
  <div>
  <button class="btn btn-default" style="margin-left: 15px;"> <a href="{{url('/addreview')}}">ADD</a> </button><br>
  <div>

        
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              
              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>
              Great Weekend<br>
              <pre><b>"Reviewed on : 20 Dec 2018"
              </b></pre>
              Had a fantastic weekend in Rome and was very impressed with the hotel and staff. They were always on hand to help you out. Breakfast was delicious too
              <div>
                
              
            </div>              
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              
              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>
              Great Weekend<br>
              <pre><b>"Reviewed on : 20 Dec 2018"
              </b></pre>
              Had a fantastic weekend in Rome and was very impressed with the hotel and staff. They were always on hand to help you out. Breakfast was delicious too
              <div>
                
              
        
            </div>              
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              
              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

               Great Weekend<br>
              <pre><b>"Reviewed on : 20 Dec 2018"
              </b></pre>
              Had a fantastic weekend in Rome and was very impressed with the hotel and staff. They were always on hand to help you out. Breakfast was delicious too

              <div>
            
      </div>
        
            </div>
            <!-- /.box-body -->
          </div>
        </div>


</div>
    
    
</section>
</div>


<!-- Modal -->
      @endsection