<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-shopping-cart"></i> Pedidos <small>Todos los pedidos</small>
            </h1>

        </div>
    </div>

    <a class="btn btn-small btn-info" onclick="javascript:abrirPedidos();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" onclick="javascript:mostrarCrearPedido();"><i class="fa fa-plus"></i> Agregar Pedido</a>
    <br><br>

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
                    <td data-hide="phone,tablet">Opciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $key => $value)
                <tr>
                    <td>{{ $value->producto->nombre}}</td>
                    <td>{{ $value->producto->proveedor->nombre }}</td>
                    <td>{{ $value->naviera->nombre }}</td>
                    <td>{{ $value->compania->nombre }}</td>
                    <td>{{ $value->compania->cliente->nombre }}</td>
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
                        <a href="{{ URL::to('showpdf/'.$guia->url_archivo)}}" target="_blank" >
                            {{ $guia->numero_guia}}
                        </a>
                        {{"-".$guia->empresa_envio}}
                        <br>
                        @endforeach
                    </td>
                    <td>{{ $value->numero_reserva}}</td>
                    <td>{{ $value->buque."-".$value->numero_viaje}}</td>
                    <td>{{ $value->fecha_carga}}</td>
                    <td>{{ $value->fecha_abordaje}}</td>
                    <td>{{ $value->fecha_entrega}}</td>
                    <td>{{ $value->tipo}}</td>
                    <td>
                        @foreach($value->documentos as $llave => $docu)
                        <a href="{{ URL::to('showOtpdf/'.$docu->url_archivo)}}" target="_blank" >
                            {{explode("/",$docu->url_archivo)[4];}}
                        </a> 
                        <br>
                        @endforeach
                    </td>

                    <td>  
                        <a class="btn btn-small btn-success" onclick="javascript:mostrarDetallePedido({{ $value->id }});"><i class="fa fa-search"></i></a>
                        <a class="btn btn-small btn-primary" data-toggle="confirmation" data-href="javascript:finalizarPedido({{ $value->id }});" href="javascript:finalizarPedido({{ $value->id }});"><i class="fa fa-check"></i></a>
                        <a class="btn btn-small btn-info" onclick="javascript:mostrarEditarPedido({{ $value->id }});"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-small btn-danger" data-toggle="confirmation"  data-href="javascript:eliminarPedido({{ $value->id }});" href="javascript:eliminarPedido({{ $value->id }});"><i class="fa fa-trash-o"></i></a>
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
                    pc: 1444,
                    tablet: 1024,
                    phone: 480
            };
            var tableElement = $('#pedidosTbl');
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
