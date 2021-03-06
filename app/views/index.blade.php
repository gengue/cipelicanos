<!DOCTYPE html>
<html>
    <head>
        <title>CI Pelicanos</title>    
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/sb-admin.css') }}
        {{ HTML::style('css/pnotify.custom.min.css') }}
        {{ HTML::style('css/dataTables.bootstrap.css') }}
        {{ HTML::style('css/datatables.responsive.css') }}
        {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
        {{ HTML::style('css/plugins/morris.css') }}
        {{ HTML::style('dropzone/downloads/css/dropzone.css') }}
        {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}
        <meta name="_token" content="{{ csrf_token() }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    
     <a href="http://www.cipelicanos.biz/" target="_blank">
        <img id="logo" height="45" width="100" src="{{ asset('images/logoGRIS.png')}}">
     </a> 

                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{ ' '.Auth::user()->nombre;}}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:abrirPerfil();"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <!--li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li-->
                            <!-- <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Config</a>
                            </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="{{url('logout')}}"><i class="fa fa-fw fa-power-off"></i> Cerrar sesi&oacute;n</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav" id="menu-vertical">
                        <li class="active">
                            <a href="javascript:abrirDashboard();"><i class="fa fa-fw fa-home"></i> Inicio</a>
                        </li>
                        <li>

                            <a href="javascript:abrirPedidos();"><i class="fa fa-fw fa-shopping-cart"></i> Pedidos</a>

                        </li>
                        <li>
                            <a href="javascript:abrirClientes();"><i class="fa fa-fw fa-money"></i> Clientes</a>
                        </li>
                        <li>
                            <a href="javascript:abrirCompanias();"><i class="fa fa-fw fa-university"></i> Compa&ntilde;&iacute;as</a>
                        </li>
                        @if ($tipoUsuario == 'ADMINISTRADOR')
                            <li>
                                <a href="javascript:abrirProductos();"><i class="fa fa-fw fa-gift"></i> Productos</a>
                            </li>
                            <li>
                                <a href="javascript:abrirNavieras();"><i class="fa fa-fw fa-anchor"></i> Navieras</a>

                            </li>
                            <li>
                                <a href="javascript:abrirProveedores();"><i class="fa fa-fw fa-suitcase"></i> Proveedores</a>
                            </li>
                        @endif
                        <li>
                            <a href="javascript:abrirHistorialPedidos();"><i class="fa fa-fw fa-calendar"></i> Historial de pedidos</a>
                        </li>
                        @if ($tipoUsuario == 'ADMINISTRADOR')
                            <li>
                                <a href="javascript:abrirUsuarios();"><i class="fa fa-fw fa-users"></i> Usuarios</a>
                            </li>
                        @endif
                         <li>
                                <a href="javascript:abrirAyuda();"><i class="fa fa-fw fa-info-circle"></i> Centro de Ayuda</a>
                            </li>
                      
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="carga">
                <div id="page-wrapper">

                </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <script src="js/plugins/jquery-1.11.0.js"></script>
        <script src="js/plugins/bootstrap.min.js"></script>
        <script src="js/plugins/jquery.dataTables.min.js"></script>
        <script src="js/plugins/dataTables.bootstrap.js"></script>
        <script src="js/plugins/datatables.responsive.js"></script>
        <script src="js/plugins/bootstrap-tooltip.js"></script>
        <script src="js/plugins/bootstrap-confirmation.js"></script>
        <script src="js/plugins/moment.min.js"></script>
        <script src="js/plugins/bootstrap-datetimepicker.js"></script>
        <script src="js/plugins/morris/raphael.min.js"></script>
<!--        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>-->
        <script src="dropzone/downloads/dropzone.js"></script>
        <script src="js/plugins/pnotify.custom.min.js"></script>
        <script src="js/plugins/jquery.blockUI.js"></script>
        <script src="js/app.js"></script>

        <script> abrirDashboard();</script>
    </body>
</html>


