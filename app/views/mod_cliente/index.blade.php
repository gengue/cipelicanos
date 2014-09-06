<!DOCTYPE html>
<html>
    <head>
        <title>CI Pelicanos</title>
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/sb-admin.css') }}
        {{ HTML::style('css/pnotify.custom.min.css') }}
        {{ HTML::style('css/dataTables.bootstrap.css') }}
        {{ HTML::style('css/datatables.responsive.css') }}
        {{ HTML::style('css/plugins/morris.css') }}
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
                        <img id="logo" height="45" width="100" src="{{ asset('images/logo_pelicanos_nuevo.png')}}">
                    </a> 
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Read All New Messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">View All</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{ ' '.Auth::user()->nombre;}}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <!--li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li-->
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Config</a>
                            </li>
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
                            <a href="javascript:abrirDashboard();"><i class="fa fa-fw fa-home fa-4x"></i> Inicio</a>
                        </li>
                        <li>

                            <a href="javascript:abrirPedidos();"><i class="fa fa-fw fa-shopping-cart fa-4x"></i> Pedidos</a>

                        </li>
                        <li>
                            <a href="javascript:abrirCompanias();"><i class="fa fa-fw fa-suitcase fa-4x"></i> Compa&ntilde;ias</a>
                        </li>
                       
                        <li>
                            <a href="javascript:abrirHistorialPedidos();"><i class="fa fa-fw fa-calendar fa-4x"></i> Historial</a>
                        </li>
                        
                        <!--li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                            </ul>
                        </li-->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">
                    YEAH!
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        
        <script src="js/plugins/jquery-1.11.0.js"></script>
        <script src="js/plugins/jquery.dataTables.min.js"></script>
        <script src="js/plugins/dataTables.bootstrap.js"></script>
        <script src="js/plugins/datatables.responsive.js"></script>
        <script src="js/plugins/bootstrap.min.js"></script>
        <script src="js/plugins/morris/raphael.min.js"></script>
<!--        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>-->
        <script src="js/plugins/pnotify.custom.min.js"></script>
        <script src="js/client.js"></script>
        <script> abrirDashboard();</script>
    </body>
</html>
