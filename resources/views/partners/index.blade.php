<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VSAP & Company | Our Partner</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">



      {{--include style--}}
      @include('adminlayout.header')
      @include('adminlayout.sidebar')


  <div class="content-wrapper">
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="/partners"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Our Partner</li>
      </ol>
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-2">
          <a href="/createpartner" type="button" class="btn btn-block btn-primary">Create Partner</a>
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
              <th>Image</th>
              <th>Name</th>
              <th>Qualification</th>
              <th>Email</th>
              <th>Mobile No.</th>
              <th>Description</th>
              <th colspan = 2>Actions</th>
          </tr>
          </thead>
      <tbody>
      <?php
          $i=1;
      ?>
        @foreach($partners as $partner)
        <tr>
            <td>{{$i}}</td>
             <td><img src="{{asset('upload/'.$partner->ca_img.'')}}" height="50" width="50" ></td>
            <td>{{$partner->caname}}</td>
            <td>{{$partner->qualification}}</td>
            <td>{{$partner->email}}</td>
            <td>{{$partner->mob_no}}</td>
            <td>{{$partner->descript}}</td>

            <td>
                <a href="/editpartner/{{$partner->id}}" class="text-muted"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;

                <a href="/destroypartner/{{$partner->id}}" class="text-muted" onclick="return confirm('Are you sure, you want to delete ?')"><i class="fa fa-trash"></i></a>
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
