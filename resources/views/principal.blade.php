<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Ventas Laravel Vue Js">
    <meta name="author" content="t.me/gerbi">
    <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistema Ventas</title>

    <link rel="stylesheet" href="gl/css/font-awesome.min.css">
    <link rel="stylesheet" href="gl/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="gl/css/style.css">
    <style>
        body{
            background-color: #2f353a;
            color: #e4e7ea;
        }
        .card{
            background-color: #3a4149;
            border-color: #23282c;
        }
        .card-header{
            background-color: #343b41;
        }
        .breadcrumb{
            background-color: #3a4149;
            border-color: #000;
        }
        .sidebar{
            border-right: 1px solid #23282c;
        }
    </style>


</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<div id="app">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Escritorio</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Configuraciones</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#" data-toggle="dropdown">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Notificaciones</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-envelope-o"></i> Ingresos
                    <span class="badge badge-success">3</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-tasks"></i> Ventas
                    <span class="badge badge-danger">2</span>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="gl/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="d-md-down-none">admin </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Cuenta</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Cerrar sesión</a>
            </div>
        </li>
    </ul>
</header>

<div class="app-body">

    @include('plantilla.sidebar')

    <!-- Contenido Principal -->
    @yield('contenido')
    <!-- /Fin del contenido principal -->
</div>

</div>

<footer class="app-footer" style="background-color: #23282c; color:white; border:none">
    <span><a href="t.me/gerbi">Gerbi Dev</a> &copy; 2017</span>
    <span class="ml-auto text-white">Desarrollado por <a href="t.me/gerbi">@gerbidev</a></span>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="js/plantilla.js"></script>--}}

<script src="gl/js/jquery.min.js"></script>
<script src="gl/js/popper.min.js"></script>
<script src="gl/js/bootstrap.min.js"></script>
<script src="gl/js/pace.min.js"></script>
<script src="gl/js/Chart.min.js"></script>
<script src="gl/js/template.js"></script>
<script src="gl/js/sweetalert.min.js"></script>
<script src="gl/js/sweetalert2.min.js"></script>
</body>

</html>
