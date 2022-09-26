





<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <div class="user-panel">
     <div class="pull-left image">
      <img src="{{asset('dist/img/user-admin.png')}}" class="img-circle" alt="User Image">
     </div>
    <div class="pull-left info">
      <p>Admin</p>
      <a href=""><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>
          <!-- search form -->
    <form action="" method="get" class="sidebar-form">
     <div class="input-group">
     <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
     </div>
    </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

      <li class="active treeview">
       <a href="">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
       </a>
    </li>
    <li class="treeview">
     <a href="{{ url('vsaps')}}"><i class="fa fa-pencil-square-o"></i><span>Apply Form</span>
    </a>
   </li>
   <li>
    <a href="{{ url('sliders')}}"><i class="fa fa-sliders"></i> <span>Slider</span>
    </a>
    </li>
    <li class="treeview">
     <a href="{{ url('homepages')}}"><i class=" fas fa-home"></i><span style="margin-left:5px;">Homepage</span></a>
    </li>
    <li class="treeview">
     <a href="{{ url('partners')}}"><i class="fas fa-handshake"></i><span style="margin-left:5px;">Our Partner</span>
     </a>
    </li>
    <li class="treeview">
      <a href="{{ url('clients')}}"><i class="fas fa-users"></i><span style="margin-left:5px;">Our Clients</span>
      </a>
    </li>
    <li class="treeview">
      <a href="{{ url('values')}}"><i class="fas fa-hand-holding-medical"></i><span style="margin-left:5px;">Our Values</span>
      </a>
    </li>
    <li>
     <a href="{{ url('services')}}"><i class=" fas fa-user-cog"></i><span style="margin-left:5px;">Services</span>
     </a>
    </li>
    <li>
     <a href="{{ url('contacts')}}">
      <i class="far fa-address-book"></i> <span style="margin-left:5px;">Contact Us</span>
    </a>
   </li>
  <li class="treeview">
    <a href="/footers">
      <i class="fa fa-folder"></i> <span>Footer</span>
    </a>
  </li>


 </section>

</aside>
