
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
  <!--<img class="shortcut icon" src="{{ asset('images/logo.ico') }}"> -->
    Procurement| Inicio
  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  @yield('tags')

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <img src="{{asset('images/logo.png')}}" alt="" class="logo-mini">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{asset('images/logo.png')}}"><b>Standard Bank</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::is('home') ? "active": ""}}"><a href="{{url('/home')}}"><i class="fa fa-bar-chart-o"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-cogs"></i> <span>Procurement</span></a></li>
        <li class="{{ Request::is('fornecedor') ? "active": ""}}"><a href="{{route('fornecedor.index')}}"><i class="fa fa-check"></i> <span>KYV Status</span></a></li>
        <li><a href="#"><i class="fa fa-refresh"></i> <span>Contract Management</span></a></li>
        <li><a href="#"><i class="fa fa-edit"></i> <span>SRM Status</span></a></li>

        @can('isAdmin')
         <!--
           <li class="active"><a href="{{url('category')}}"><i class="fa fa-microchip"></i> <span>Category</span></a></li>
        -->
        @endcan

        @can('isAdmin')
        <li><a href="#"><i class="fa fa-users"></i> <span>Manage User</span></a></li>
        <li><a href="#"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
        @endcan
        <li class="">

           <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
             <i class="fa fa-power-off text-red"></i>   <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content container-fluid">
        @yield('content')
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
</div>

@yield('scripts')
<script src="{{asset('js/app.js')}}"></script>
<script>

  
  $('#edit').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var title = button.data('mytitle') 
      var description = button.data('mydescription') 
      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #title').val(title);
      modal.find('.modal-body #des').val(description);
      modal.find('.modal-body #cat_id').val(cat_id);
})


  $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #cat_id').val(cat_id);
})


</script>

</body>
</html>