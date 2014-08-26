<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-calendar"></i> Historial Pedidos <small>Todos los pedidos realizados</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>

    <a class="btn btn-small btn-info" href="javascript:abrirPedidos();"><i class="fa fa-list"></i> Mostrar pedidos activos</a>
    <br>
    <!-- BUSQUEDA -->
    <!--
    <div class="row">
        <div class="col-lg-8">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>            
                <input type="text" class="form-control" placeholder="Ingrese su busqueda">
            </div>

        </div>
        <div class="col-lg-4">
            <select class="form-control">
                <option>Numero de guia</option>
                <option>Producto</option>
                <option>Cliente</option>
            </select>
        </div>
    </div><!--FIN DE BUSQUEDA -->

    <br
        <div class="table-responsive">

        <table id="historialTbl" class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <td>Producto</td>
                    <td>Proveedor</td>
                    <td>Naviera</td>
                    <td>Containers</td>
                    <td>Guia</td>
                    <td>Numero de reserva</td>
                    <td>Buque</td>
                    <td>Fecha carga</td>
                    <td>Fecha Abordaje</td>
                    <td>Fecha Entrega</td>
                    <td>Fecha Vencimiento</td>
                    <td>Importe Facturado</td>
                    <td>Opciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $key => $value)
                <tr>
                    <td>{{ $value->nombre_producto}}</td>
                    <td>{{ $value->nombre_proveedor }}</td>
                    <td>{{ $value->nombre_naviera }}</td>
                    <td> 
                        @foreach($value->containers as $llave => $container) 
                        {{ $container->numero_container }}
                        @endforeach
                    </td>
                    <td>{{ $value->nombre_guia}}</td>
                    <td>{{ $value->numero_reserva}}</td>
                    <td>{{ $value->buque}}</td>
                    <td>{{ $value->fecha_carga}}</td>
                    <td>{{ $value->fecha_abordaje}}</td>
                    <td>{{ $value->fecha_entrega}}</td>
                    <td>{{ $value->fecha_vencimiento}}</td>
                    <td>{{ $value->importe_facturado}}</td>

                    <td>  
                        <a class="btn btn-small btn-success" href="javascript:mostrarDetallePedido({{ $value->id }});"><i class="fa fa-search"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $('#historialTbl').dataTable();
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Historial")').parent().addClass("active");
</script>
