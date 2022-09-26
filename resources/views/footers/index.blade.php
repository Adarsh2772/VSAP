<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VSAP & Company | Footer</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

     <link rel="stylesheet" href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
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
      <ol class="breadcrumb">
        <li><a href="/footers"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Footer</li>
      </ol>
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-2">
          <a href="/createfooter" type="button" class="btn btn-block btn-primary">Create New Footer</a>
        </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">
      <div class="row">
       <div class="col-12">
         <div class="card">
          <div class="card-body">
           <table class="table table-striped table-valign-middle">
            <thead>
            <tr>
              <th>ID</th>
              <th>Services</th>
              <th>Address</th>
              <th>Office No.</th>
              <th>Email</th>
              <th>Website</th>

              <th colspan = 2>Actions</th>
          </tr>
          </thead>
      <tbody>
      <?php
          $i=1;
      ?>
        @foreach($footers as $footer)
        <tr>
            <td>{{$i}}</td>
            <td>{{$footer->services}}</td>
            <td>{{$footer->add}}</td>
            <td>{{$footer->office_no}}</td>
            <td>{{$footer->email}}</td>
            <td>{{$footer->website}}</td>

            <td>
                <a href="/editfooter/{{$footer->id}}" class="text-muted"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;

                <a href="/destroyfooter/{{$footer->id}}" class="text-muted" onclick="return confirm('Are you sure, you want to delete ?')"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
      <?php

          $i++;

      ?>

        @endforeach
      </tbody>
  </table>
          </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      </section>
      </div><!-- /.content-wrapper -->
          @include('adminlayout.footer')
     </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
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
