@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection
@section('content')


<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
 <h1>
  Contacts
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Contact</a></li>
    
  </ol>
</section>

<section class="content">

<div class="row" style="padding: 5px;">
      
      <div class="col-md-4">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            
           Name : Nina Mcintire<br>
           Email :Nina@Mcintire.com

            
            <pre><b>"Recived on : 20 Dec 2018"
            </b></pre>
            Had a fantastic weekend in Rome and was very impressed with the hotel and staff. They were always on hand to help you out. Breakfast was delicious too
           
             <div class="modal-footer">
      
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Reply</button>
    </div>
              
            
          </div>              
          </div>
          <!-- /.box-body -->
        </div>

        <div class="col-md-4">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            
           Name : Nina Mcintire<br>
           Email :Nina@Mcintire.com

            
            <pre><b>"Recived on : 20 Dec 2018"
            </b></pre>
            Had a fantastic weekend in Rome and was very impressed with the hotel and staff. They were always on hand to help you out. Breakfast was delicious too
           
             <div class="modal-footer">
      
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Reply</button>
    </div>
              
            
          </div>              
          </div>
         
        </div>
      </div>
  
  
</section>
</div>


<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Recipient:</label>
          <input type="text" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
          <label for="message-text" class="col-form-label">Message:</label>
          <textarea class="form-control" id="message-text"></textarea>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Send message</button>
    </div>
  </div>
</div>
</div>
    @endsection