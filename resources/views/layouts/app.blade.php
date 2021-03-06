<!DOCTYPE html>
<html lang="es">
<?php use App\Models\Periodo ?>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')Textiles San Francisco</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/ico.png') }} ">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/atlantis.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}" >
    <link href="{{ asset('vendor/bootstrap-daterangepicker/bootstrap-datepicker.css') }}" rel="stylesheet">


    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>

    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('assets/css/fonts.min.css') }}']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark2">

                <a href="{{ route('home')}}" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" width="150px" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="white">

                <div class="container-fluid">

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="{{ asset('assets/img/user_icon.png') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="{{ asset('assets/img/user_icon.png') }}" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                        
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="dark">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="{{ asset('assets/img/user_icon.png') }}" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                         
                                </span> 
                            </a>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                    
                        

                        
                       
                        
                        <li class="nav-item">
                            <a href="{{route('encuestado.create')}}">
                            <i class="fas fa-user-circle"></i>
                                <p>Iniciar</p>
                            </a>
                        </li>

                        

                                             
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#sistema">
                            <i class="fas fa-cogs"></i>
                                <p>Sistema</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sistema">
                                <ul class="nav nav-collapse">
                             
                               

                                
                                                                 
                                
                                 
                             

                                </ul>
                            </div>
                        </li>
                        
                        



                        @canany (['users.index' ,'roles.index'])
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#usuarios">
                                <i class="fas fa-users"></i>
                                <p>Usuarios</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="usuarios">
                                <ul class="nav nav-collapse">
                                    @can('users.index')
                                    <li>
                                        <a href="{{ route('users.index') }}">
                                            <span class="sub-item">Usuarios</span>
                                        </a>
                                    </li>
                                    @endcan
                                    @can ('roles.index')
                                    <li>
                                        <a href="{{ route('roles.index') }}">
                                            <span class="sub-item">Roles</span>
                                        </a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                        @endcanany
                        @can('cartera.index')
                        <li class="nav-item">
                            <a href="{{ route('cartera.index') }}">
                                <i class="fas fa-wallet"></i>
                                <p>Crear cartera</p>
                            </a>
                        </li>
                        @endcan
                        
                        @can('cartera.vistaasesor')
                        <li class="nav-item">
                            <a href="{{ route('cartera.vistaasesor', auth()->id())}}">
                                <i class="fas fa-user-tag"></i>
                                <p>Vista Asesor</p>
                            </a>
                        </li>
                        @endcan
                        @can('plantillas.index')
                        <li class="nav-item">
                            <a href="{{ route('plantillas.index') }}">
                                <i class="fa fa-folder-open"></i>
                                <p>Plantillas de creditos</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @if(session('info'))
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @yield('contenido')

            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                    Textiles San Francisco <i class="far fa-copyright"></i> {{date('Y')}}
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('assets/js/atlantis.min.js') }}"></script>

    <script src="{{ asset('vendor/bootstrap-daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-daterangepicker/bootstrap-datepicker.js') }}"></script>

    @yield('js')
</body>
</html>
