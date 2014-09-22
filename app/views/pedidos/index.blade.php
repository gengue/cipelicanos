<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-shopping-cart"></i> Pedidos <small>Todos los pedidos</small>
            </h1>
            
        </div>
    </div>

    <a class="btn btn-small btn-info" href="javascript:abrirPedidos();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearPedido();"><i class="fa fa-plus"></i> Agregar pedido</a>
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
                    <td data-hide="phone,tablet">N&uacute;mero de reserva</td>
                    <td data-hide="phone,tablet">Buque</td>
                    <td data-hide="phone">carga</td>
                    <td>Abordaje</td>
                    <td data-hide="phone,tablet">Entrega</td>
                    <td data-hide="phone,tablet">Opciones</td>
                </tr>
            </thead>
            <tbody>
               @foreach($pedidos as $key => $value)
                <tr>
                    <td>{{ $value->producto->nombre}}</td>
                    <td>{{ $value->producto->proveedor->nombre }}</td>
                    <td>{{ $value->naviera->nombre }}</td>
                    <td> 
                        @foreach($value->containers as $llave => $container) 

                        <a href="{{ $value->naviera->url_seguimiento . $container->numero_container }}" target="_blank">
                            {{ $container->numero_container }}
                        </a> 
                        <br>
                        @endforeach
                    </td>
                    <td> 
                        @foreach($value->guias as $llave => $guia) 
                         {{ $guia->numero_guia. " - ".$guia->empresa_envio}},
                        @endforeach
                    </td>
                    <td>{{ $value->numero_reserva}}</td>
                    <td>{{ $value->buque."-".$value->numero_viaje}}</td>
                    <td>{{ $value->fecha_carga}}</td>
                    <td>{{ $value->fecha_abordaje}}</td>
                    <td>{{ $value->fecha_entrega}}</td>

                    <td>  
                        <a class="btn btn-small btn-success" href="javascript:mostrarDetallePedido({{ $value->id }});"><i class="fa fa-search"></i></a>
                        <a class="btn btn-small btn-primary" data-toggle="confirmation" data-href="javascript:finalizarPedido({{ $value->id }});" href="javascript:finalizarPedido({{ $value->id }});"><i class="fa fa-check"></i></a>
                        <a class="btn btn-small btn-info" href="javascript:mostrarEditarPedido({{ $value->id }});"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-small btn-danger" data-toggle="confirmation" data- data-href="javascript:eliminarPedido({{ $value->id }});" href="javascript:eliminarPedido({{ $value->id }});"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $('[data-toggle="confirmation"]').confirmation();
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
