<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-shopping-cart"></i> Pedidos <small>Todos los pedidos</small>
            </h1>
            
        </div>
    </div>

    <a class="btn btn-small btn-info" href="javascript:abrirPedidos();"><i class="fa fa-list"></i> Listar todos</a>

    <br><br>

    <div class="table-responsive">

        <table id="pedidosTbl" class="table table-striped table-hover table-bordered table-condensed">
            <thead>
                <tr>
                    <td data-class="expand">Producto</td>
                    <td data-hide="phone,tablet,pc">Proveedor</td>
                    <td data-hide="phone,tablet">Compañia</td>
                    <td data-hide="phone,tablet">Naviera</td>
                    <td data-hide="phone,tablet">Containers</td>
                    <td data-hide="phone">Guia</td>
                    <td data-hide="phone,tablet">N.Reserva</td>
                    <td data-hide="phone,tablet">Buque</td>
                    <td data-hide="phone,tablet,pc">carga</td>
                    <td data-hide="phone,tablet">Abordaje</td>
                    <td data-hide="phone,tablet,pc">Entrega</td>
                    <td data-hide="phone">Tipo</td>
                </tr>
            </thead>
            <tbody>
               @foreach($pedidos as $key => $value)
                <tr>
                    <td>{{ $value->producto->nombre}}</td>
                    <td>{{ $value->producto->proveedor->nombre }}</td>
                    <td>{{ $value->naviera->nombre }}</td>
                    <td>{{ $value->compania->nombre }}</td>
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
                    <td>{{ $value->tipo}}</td>
s
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
        pc: 1444,
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
