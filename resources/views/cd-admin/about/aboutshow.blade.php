@extends('cd-admin.home-master')
@section('page-title')
About Show
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
  <section class="content-header">
    <h1>
    About
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i>Dashboard/About/Show About</li>
    </ol>
  </section>
  <!-- Main content -->
  
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
               

                  <div>
                     @if(Session::has('updatesuccess'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Updated Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif
            <div class="box-header">
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Tagline</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($about as $a)
                <tr>
                  <td>{{$a->id}}</td>
                  <td>{{$a->name}}</td>
                  <td>{{$a->tagline}}</td>
                  
                  <td>


                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal{{$a->id}}" ><i class="fa fa-edit">
                    </i></button></a>
                 <a href="{{url('/aboutdetail',$a->id)}}">
                   <button class="btn btn-success" data-toggle="modal" data-target="#view{{$a->id}}"><i class="fa  fa-eye"> </i></button>
                 </a>

                    
                  </td>
                </tr>
              @endforeach

                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Tagline</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
                </div>
                
              </div>
            </div>
          </div>
          
        </section>
  </div>      
</div>





<!-- edit model -->
@foreach($about as $a)

<div id="myModal{{$a->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit::{{$a->name}}</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">  
             <form role="form" method="post" action="{{url('/aboutupdate/'.$a->id)}}" enctype="multipart/form-data">
             {{csrf_field()}}
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"  value="{{$a->name}}">
                  </div>
                  <div class="form-group">
                    <label for="name">Tagline</label>
                    <input type="text" class="form-control" name="tagline" value="{{$a->tagline}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="name">Image</label>
                    <input type="file" class="form-control" name="image" >
                  </div>
                  <div class="form-group">
                    <label for="altimage">Alt Image</label>
                    <input type="text" class="form-control"  name="altimage" value="{{$a->altimage}}" >
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" style="height=100px;" id="summernote">{!! $a->description !!}</textarea>
                  </div>
                
                  <div class="form-group">
                    <label for="pdf">Pdf</label>
                    <input type="file" class="form-control" name="pdf">
                  </div>
                  <div class="form-group">
                    <label for="video">Video link</label>
                    <input type="text" class="form-control" name="video" value="{{$a->video}}">
                  </div>

                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>

                </div>
              </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endforeach

{{-- delete modal --}}
{{-- <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Package</h4>
      </div>
      <div class="modal-body">
        <h2> <p>Are you sure??</p> </h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


      </div>
    </div>

  </div>
</div> --}}

@endsection