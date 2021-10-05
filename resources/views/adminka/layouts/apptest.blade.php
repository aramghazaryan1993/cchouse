<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
                            
                            <!-- all style -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('adminka/css/sb-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <!-- Custom fonts for this template-->
  <link href="{{ asset('adminka/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('adminka/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

  <style type="text/css">
         tr th{
            color:  black !important;
            border: 1px solid black;
          }
  </style>
    @stack('styles')
</head>
<body id="page-top">


  
  
      
@section('header')
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="{{route('admin')}}">Панель администратора</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                   {{ Auth::user()->name }}
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                   <!-- logout -->
                    <div class="" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Выход') }}
                         </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                  @csrf
                        </form>
                   </div>
              </a>
            </div>
          </li>
        </ul>
      </nav>  

           @if (session('status'))
            <div class="alert alert-success" style="text-align: center;">
                   <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('status') }}
            </div>
          @endif   
    @show

            @yield('content')
        
@section('footer')    
      <!--    <footer class="sticky-footer">-->
      <!--      <div class="container my-auto">-->
      <!--        <div class="copyright text-center my-auto">-->
      <!--          <span>Copyright © Your Website 2019</span>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </footer>-->

                <!-- </div> -->
                <!-- /.content-wrapper -->
                <!-- </div> -->
                <!-- /#wrapper -->
                <!-- Scroll to Top Button-->
      <!--<a class="scroll-to-top rounded" href="#page-top">-->
      <!--  <i class="fas fa-angle-up"></i>-->
      <!--</a>-->

@show




        <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('adminka/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('adminka/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('adminka/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('adminka/vendor/datatables/jquery.dataTables.js') }}"></script>


  <!-- Custom scripts for all pages-->
  <script src="{{ asset('adminka/js/sb-admin.min.js') }}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset('adminka/js/demo/datatables-demo.js') }}"></script>

</body>
</html>