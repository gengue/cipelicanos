<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Pedidos <small>Detalle pedido</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>

    <a class="btn btn-small btn-info" href="javascript:abrirPedidos();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>

	<div class="jumbotron text-center">
		<h2>{{ $pedido->nombre_producto }}</h2>
		<p>
                    <strong>Proveedor:</strong> <a href="javascript:mostrarDetalleProveedores({{$pedido->proveedor_id}});">{{ $pedido->nombre_proveedor }}</a><br>
			<strong>Naviera:</strong> <a href="javascript:mostrarDetalleNaviera({{$pedido->naviera_id}});">{{ $pedido->nombre_naviera }}</a>
			<strong>guia:</strong> {{ $pedido->nombre_guia }}
			<strong>Numero de reserva:</strong> {{ $pedido->numero_reserva }}
			<strong>Buque:</strong> {{ $pedido->buque }}
			<strong>Fecha carga:</strong> {{ $pedido->fecha_carga}}
			<strong>Fecha abordaje:</strong> {{ $pedido->fecha_abordaje }}
			<strong>Fecha entrega:</strong> {{ $pedido->fecha_entrega }}
			<strong>Fecha vencimiento:</strong> {{ $pedido->fecha_vencimiento }}
			<strong>Importe Facturado:</strong> {{ $pedido->importe_facturado }}
                <hr>
                <h3>Containers</h3>
                    @foreach ($pedido->containers as $key => $value)
                        <strong>Numero de Container</strong>: {{$value->numero_container}}
                        <br>
                    @endforeach
                
		</p>
	</div>

</div>