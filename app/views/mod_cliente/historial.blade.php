<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">


                <i class="fa fa-fw fa-calendar"></i> Historial <small>Pedidos finalizados</small>


            </h1>
            
        </div>
    </div>

    <div class="table-responsive">

        <table id="pedidosTbl" class="table table-striped table-hover table-bordered table-condensed">
            <thead>
                <tr>
                    <td data-class="expand">Producto</td>
                    <td data-hide="phone,tablet,pc">Proveedor</td>
                    <td data-hide="phone,tablet">Compañia</td>
                    <td data-hide="phone,tablet">Cliente</td>
                    <td data-hide="phone,tablet">Naviera</td>
                    <td data-hide="phone,tablet">Containers</td>
                    <td data-hide="phone">Guia</td>
                    <td data-hide="phone,tablet">N.Reserva</td>
                    <td data-hide="phone,tablet">Buque</td>
                    <td data-hide="phone,tablet,pc">carga</td>
                    <td data-hide="phone,tablet">Abordaje</td>
                    <td data-hide="phone,tablet,pc">Entrega</td>
                    <td data-hide="phone">Tipo</td>
                    <td data-hide="phone,tablet,pc">Documentos</td>
                </tr>
            </thead>
            <tbody>

    
               
                @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->producto->nombre}}</td>
                    <td>{{ $pedido->producto->proveedor->nombre }}</td>
                    <td>{{ $pedido->naviera->nombre }}</td>
                    <td>{{ $pedido->compania->nombre }}</td>
                    <td>{{ $pedido->compania->cliente->nombre }}</td>
                    <td> 
                        @foreach($pedido->containers as $llave => $container) 

                        <a href="{{ $pedido->naviera->url_seguimiento . $container->numero_container }}" target="_blank">
                            {{ $container->numero_container }}
                        </a> 
                        <br>
                        @endforeach
                    </td>
                    <td> 
                        @foreach($pedido->guias as $llave => $guia) 
                        <a href="{{ URL::to('showpdf/'.$guia->url_archivo)}}" target="_blank" >
                            {{ $guia->numero_guia}}
                        </a>
                        {{"-".$guia->empresa_envio}}
                        <br>
                        @endforeach
                    </td>
                    <td>{{ $pedido->numero_reserva}}</td>
                    <td>{{ $pedido->buque."-".$pedido->numero_viaje}}</td>
                    <td>{{ $pedido->fecha_carga}}</td>
                    <td>{{ $pedido->fecha_abordaje}}</td>
                    <td>{{ $pedido->fecha_entrega}}</td>
                    <td>{{ $pedido->tipo}}</td>
                    <td>
                        @foreach($pedido->documentos as $llave => $docu)
                        <a href="{{ URL::to('showOtpdf/'.$docu->url_archivo)}}" target="_blank" >
                            {{explode("/",$docu->url_archivo)[4];}}
                        </a> 
                        <br>
                        @endforeach
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
    $('#menu-vertical').find('a:contains("Historial")').parent().addClass("active");
</script>
