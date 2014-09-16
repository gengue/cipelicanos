
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-home"></i> Inicio <small>cliente</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n: {{ $ultimoAcceso }}
                </li>
            </ol>
        </div>
    </div>
   

    <div class="row">
        
        <div class="col-lg-6 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $numpedidos }}</div>
                            <div>Pedidos activos</div>
                        </div>
                    </div>
                </div>
                <a href="javascript:abrirPedidos();">
                    <div class="panel-footer">
                        <span class="pull-left">Ver detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
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
                                    <th>Compania</th>
                                    <th>Usuario</th>
                                    <th>Monto</th>
                                    <th>Fecha Carga</th>
                                </tr>
                            </thead>    
                            <tbody>
                                @foreach($pedidos as $pedido)
                                    <tr>
                                        <td>{{ $pedido->compania->nombre}}</td>
                                        <td>{{ $pedido->producto->nombre }}</td>
                                        <td>{{ $pedido->importe_facturado }}</td>
                                        <td>{{ $pedido->fecha_carga }}</td>
                                    </tr>
                                @endforeach
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