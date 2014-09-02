<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-shopping-cart"></i> Pedidos <small>Todos los pedidos</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>

    <a class="btn btn-small btn-info" href="javascript:abrirPedidos();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearPedido();"><i class="fa fa-plus"></i> Agregar Pedido</a>
    <br><br>

    <div class="table-responsive">

        <table id="pedidosTbl" class="table table-striped table-hover table-bordered table-condensed">
            <thead>
                <tr>
                    <td data-class="expand">Producto</td>
                    <td data-hide="phone,tablet">Proveedor</td>
                    <td data-hide="phone,tablet">Naviera</td>
                    <td data-hide="phone,tablet">Containers</td>
                    <td data-hide="phone">Guia</td>
                    <td data-hide="phone,tablet">Numero de reserva</td>
                    <td data-hide="phone,tablet">Buque</td>
                    <td data-hide="phone">carga</td>
                    <td>Abordaje</td>
                    <td data-hide="phone,tablet">Entrega</td>
                    <td data-hide="phone,tablet">Vencimiento</td>
                    <td data-hide="phone">Importe Facturado</td>
                    <td data-hide="phone,tablet">Opciones</td>
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
                        <a href="{{ $value->url_seguimiento . $container->numero_container }}" target="_blank">
                        	{{ $container->numero_container }}
                        </a> 
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
                        <a class="btn btn-small btn-info" href="javascript:mostrarEditarPedido({{ $value->id }});"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-small btn-danger" href="javascript:eliminarPedido({{ $value->id }});"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    "use strict";
    var responsiveHelper = undefined;
    var breakpointDefinition = {
        tablet: 1024,
        phone: 480
    };
    var tableElement =  $('#pedidosTbl');
    tableElement.dataTable({
        autoWidth: false,
        preDrawCallback: function() {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper) {
                responsiveHelper = new ResponsiveDatatablesHelper(tableElement, breakpointDefinition);
            }
        },
        rowCallback: function(nRow) {
            responsiveHelper.createExpandIcon(nRow);
        },
        drawCallback: function(oSettings) {
            responsiveHelper.respond();
        }
    });
  
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Pedidos")').parent().addClass("active");
</script>
