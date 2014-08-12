<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>C.I Pelicanos Admin - Pedido</title>
	{{ HTML::style('css/bootstrap.css') }}
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('pedidos') }}">Ver todas los Pedidos</a></li>
		<li><a href="{{ URL::to('pedidos/create') }}">Crear pedido </a>
	</ul>
</nav>

<h1>Showing {{ $pedido->id}}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $pedido->nombre_producto }}</h2>
		<p>
			<strong>Proveedor:</strong> {{ $pedido->nombre_proveedor }}<br>
			<strong>Naviera:</strong> {{ $pedido->nombre_naviera }}
			<strong>guia:</strong> {{ $pedido->nombre_guia }}
			<strong>Numero de reserva:</strong> {{ $pedido->numero_reserva }}
			<strong>Buque:</strong> {{ $pedido->buque }}
			<strong>Fecha carga:</strong> {{ $pedido->fecha_carga}}
			<strong>Fecha abordaje:</strong> {{ $pedido->fecha_abordaje }}
			<strong>Fecha entrega:</strong> {{ $pedido->fecha_entrega }}
			<strong>Fecha vencimiento:</strong> {{ $pedido->fecha_vencimiento }}
			<strong>Importe Facturado:</strong> {{ $pedido->importe_facturado }}
                <ul>
                    @foreach ($pedido->containers as $key => $value)
                    <li><strong>Id de Container</strong>: {{$value->container_id}}</li>
                    <li><strong>Numero de Container</strong>: {{$value->numero_container}}</li>
                    @endforeach
                </ul>
		</p>
	</div>

</div>
</body>
</html>