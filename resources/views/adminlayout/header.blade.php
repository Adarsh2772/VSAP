<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VSAP & Company| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('/admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">

<header class="main-header">
        <!-- Logo -->
  <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>VSAP &</b> Company</span>
  </a>
        <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
  <div class="navbar-custom-menu">
  <ul class="nav navbar-nav">
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{asset('/dist/img/userr.png')}}" class="user-image" alt="User Image">
          <span class="hidden-xs">VSAP & Company</span>
      </a>
    <ul class="dropdown-menu">
                  <!-- User image -->
    <li class="user-header">
      <img src="{{asset('/dist/img/userr.png')}}" class="img-circle" alt="User Image">
      <p>VSAP & Company
      <small>Chartered Accountant</small>
      </p>
    </li>
    <li class="user-footer">
      <div class="pull-left">
        <a href="{{ url('login')}}" class="btn btn-default btn-flat">Login</a>
      </div>
      <div class="pull-right">
        <a href="{{ url('logout')}}" class="btn btn-default btn-flat">Log out</a>
      </div>
    </li>
    </ul>
    </li>
              <!-- Control Sidebar Toggle Button -->
    <li>
     <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
    </li>
  </ul>
  </div>
  </nav>
</header>


</body>
</html>