
<!DOCTYPE html>
<html lang="en">
<head>    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{ config('app.name') }}</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{asset("plugins/fontawesome-free/css/all.min.css")}}>
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  
  <link rel="stylesheet" href={{asset("dist/css/adminlte.min.css")}}>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>Document</title>
</head>

<body class="hold-transition sidebar-mini">
        <div class="wrapper">
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="#" class="nav-link">Contact</a>
                    </li>
                  </ul>
              
                  <!-- SEARCH FORM -->
                  <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
              
                  
                </nav>
                <!-- /.navbar -->
              
                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                  <!-- Brand Logo -->
                  <a href="index3.html" class="brand-link">
                    <img src={{asset("img/logo.png")}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">Sumber Jaya</span>
                  </a>
              
                  <!-- Sidebar -->
                  <div class="sidebar">
                    
              
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        
                        <li class="nav-item">
                          <a href="{{url('admin')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                              Dashboard                {{-- <span class="right badge badge-danger">New</span> --}}
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                                <a href="admin/products/" class="nav-link">
                                  <i class="nav-icon fas fa-th"></i>
                                  <p>
                                    Products                {{-- <span class="right badge badge-danger">New</span> --}}
                                  </p>
                                </a>
                        </li>
                        
                  </div>
                  <!-- /.sidebar -->
                </aside>
              
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                  <!-- Content Header (Page header) -->
                  <div class="content-header">
                    <div class="container-fluid">
                      <div class="row mb-2">
                        <div class="col-sm-6">
                          <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div><!-- /.col -->
                      </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </div>
                  <!-- /.content-header -->
    @yield('content')

    </div>

    <footer class="main-footer">
            <strong>&copy;
                All rights reserved | Sumber Jaya Store and Fashion Display
    </footer>

    
<!-- jQuery -->

<script src={{asset("plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap -->
<script src={{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- AdminLTE -->
<script src={{asset("dist/js/adminlte.js")}}></script>

<!-- OPTIONAL SCRIPTS -->
<script src={{asset("plugins/chart.js/Chart.min.js")}}></script>
<script src={{asset("dist/js/demo.js")}}></script>
<script src={{asset("dist/js/pages/dashboard3.js")}}></script>

</body>

</html>
