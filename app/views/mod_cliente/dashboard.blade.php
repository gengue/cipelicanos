
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-home"></i> Inicio <small>cliente</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
   

    <div class="row">
        
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>Pedidos activos</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Ver detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
       <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                    <div id="morris-donut-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-shopping-cart fa-fw"></i> &Uacute;ltimos pedidos realizados</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Producto</th>
                                    <th>Naviera</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12</td>
                                    <td>Madera</td>
                                    <td>Maerks Line</td>
                                    <td>21/07/2014</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Madera</td>
                                    <td>Maerks Line</td>
                                    <td>21/07/2014</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Madera</td>
                                    <td>Maerks Line</td>
                                    <td>21/07/2014</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Madera</td>
                                    <td>Maerks Line</td>
                                    <td>21/07/2014</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <a href="javascript:abrirPedidos();">Ver todos los pedidos <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>
<!-- /.container-fluid -->
<script>
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Inicio")').parent().addClass("active");
</script>