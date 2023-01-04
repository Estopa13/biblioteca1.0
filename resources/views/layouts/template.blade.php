<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Biblioteca @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="/adminlte/plugins/fonts.css" rel="stylesheet">


</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>


          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @can('update',[Auth::user(),['user.edit','userown.edit']])
            <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">
              Edit profile
            </a>
            @endcan
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('home') }}" class="brand-link">

        <span class="brand-text font-weight-light">Biblioteca</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        @guest
        @else
        @can('view',[Auth::user(),['user.edit','userown.edit']])
        <!-- Sidebar user panel (optional) -->
        <a href="{{ route('user.edit', Auth::user()->id) }}" class="d-block">
          <div class="user-panel mt-2 pb-2 mb-2 d-flex">

            <div class="info">
              {{ Auth::user()->name }}
            </div>
          </div>
        </a>
        @endcan
        @endguest

        <!-- Sidebar Menu -->
        @if(Auth::check())
            <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <p>
                                    Libreria
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('haveaccess','user.index')
                                    <li class="nav-item has-treeview">
                                        <a href="{{route('user.index')}}" class="nav-link">
                                            <a href="#" class="nav-link">
                                                <p>
                                                    Usuarios
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{route('user.index')}}" class="nav-link">

                                                        <p>Lista de usuarios</p>
                                                    </a>
                                                </li>
                                            </ul>
                                @endcan

                                @can('haveaccess','role.index')
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <p>
                                                Roles
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">

                                            @can('haveaccess','role.index')
                                                <li class="nav-item">
                                                    <a href="{{route('role.index')}}" class="nav-link">

                                                        <p> rol</p>
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endcan

                                @can('haveaccess','category.index')
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">

                                            <p>
                                                Categorias
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">

                                            @can('haveaccess','category.index')
                                                <li class="nav-item">
                                                    <a href="{{route('category.index')}}" class="nav-link">

                                                        <p>categoria</p>
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endcan

                                @can('haveaccess','role.index')
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <p>
                                                Estantes
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">

                                            @can('haveaccess','role.index')
                                                <li class="nav-item">
                                                    <a href="{{url('estantes')}}" class="nav-link">
                                                        <p>Ver estantes</p>
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endcan

                                @if(Auth::user()->name === 'admin')
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <p>
                                                    Listar Libros
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{url('libros')}}" class="nav-link">
                                                        <p>Listar</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                @else
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <p>
                                            Prestar
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{url('prestamos')}}" class="nav-link">
                                                <p>Libros</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                    @endif
                            </ul>
                        </li>

                    </ul>
                </nav>
        @else

        @endif
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: auto;">
      <!-- Main content -->
      <section class="content">
        <div class="container">
          @yield('content')
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- DataTables -->
  <!-- jQuery -->
  <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/adminlte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/adminlte/dist/js/demo.js"></script>
  <!-- General JS -->
  <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>
