@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>SEO for Service</h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">SEO</a></li>
        <li class="active">Service SEO</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px">
            <div class="box-header with-border">
            <center><h3 class="box-title">Add SEO For Services</h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">SEO Title</label>
                  <input type="text" class="form-control" name="stitle"  id="stitle" placeholder="Enter SEO Title">
                
                </div>
                <div class="form-group">
                  <label for="name">SEO Keywords</label>
                  <input type="text" class="form-control" name="skey"  id="skey" placeholder="Enter SEO Keywords">
                
                </div>
              <div class="form-group">
                  <label for="name">SEO Description</label>
                  <textarea class="form-control" name="sdes"  id="sdes" placeholder="Enter SEO Description">
                </textarea>
                
                </div>
             

               

              </div>
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Submit</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
               </div>

    </form>
            </form>
          </div>
          <!-- /.box -->
      </div>
  </div>
</section>



</div>
       
@endsection