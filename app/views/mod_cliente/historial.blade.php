<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
<<<<<<< HEAD

                <i class="fa fa-fw fa-calendar"></i> Historial <small>Pedidos finalizados</small>

=======
                <i class="fa fa-fw fa-calendar"></i> Historial <small>Pedidos finalizados</small>
>>>>>>> d0da0a9f0e7db1ce30857a5502355f38d845a9f0
            </h1>
            
        </div>
    </div>

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
                </tr>
            </thead>
            <tbody>

    
               
                @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->producto->nombre}}</td>
                    <td>{{ $pedido->producto->proveedor->nombre }}</td>
                    <td>{{ $pedido->naviera->nombre }}</td>
                    <td> 
                        @foreach($pedido->containers as $container) 
                        <a href="{{ $pedido->naviera->url_seguimiento . $container->numero_container }}" target="_blank">
                            {{ $container->numero_container }}
                        </a> <br>

                        @endforeach
                    </td>
                    <td> 
                        @foreach($pedido->guias as $guia) 
                          {{ $guia->numero_guia }} - {{ $guia->empresa_envio}},
                        @endforeach
                    </td>
                    <td>{{ $pedido->numero_reserva}}</td>
                    <td>{{ $pedido->buque}}</td>
                    <td>{{ $pedido->fecha_carga}}</td>
                    <td>{{ $pedido->fecha_abordaje}}</td>
                    <td>{{ $pedido->fecha_entrega}}</td>

                    
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
    $('#menu-vertical').find('a:contains("Historial")').parent().addClass("active");
</script>
