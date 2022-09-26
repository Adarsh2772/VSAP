<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Contact Us</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">



  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

     {{--include style--}}

     @include('adminlayout.header')

     @include('adminlayout.sidebar')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>Update Contact </h1>
       <ol class="breadcrumb">
        <li><a href="/contacts"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Update Contact Us</li>
      </ol>
    </section>

  <section class="content">
    <div class="row">
            <!-- left column -->
    <div class="col-md-6">
              <!-- general form elements -->
    <div class="box box-primary">
       @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
     <form method="post" action="/updatecontact" role="form" enctype="multipart/form-data">
       {{ csrf_field() }}
      <div class="box-body">

      <div class="form-group" style="display: none;">
        <label for="id">Id:</label>
        <input type="number" class="form-control" name="id" value="{{ $contact->id }}" >
      </div>

      <div class="form-group">
        <label for="bname">Branch Name</label>
        <input type="text" class="form-control" name="bname" value="{{ $contact->bname }}">
      </div>

      <div class="form-group">
        <label>Address</label>
          <textarea class="form-control" rows="3" name="add">{{ $contact->add }}</textarea>
      </div>


     <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" value="{{ $contact->email }}">
     </div>

     <div class="form-group">
        <label for="office_no">Office No:</label>
        <input type="tel" class="form-control" name="office_no" value="{{ $contact->office_no }}" >
     </div>


      </div><!-- /.box-body -->

      <div class="box-footer">
       <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><!-- /.box -->


 </div><!--/.col (left) -->
  </div>   <!-- /.row -->
  </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  <footer class="main-footer">
  <div class="pull-right hidden-xs">
   <b>Version</b> 2.3.0
  </div>
  <strong>Copyright &copy; 2021-2022 <a href="https://eligo.co.in">ELIGO APPTECH PVT. LTD</a>.</strong> All rights reserved.
  </footer>
    </div><!-- ./wrapper -->


  <script src="{{asset('admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
  </body>
</html>
