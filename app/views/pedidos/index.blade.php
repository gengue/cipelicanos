<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>C.I Pelicanos Admin - Compañias</title>
        {{ HTML::style('css/bootstrap.css') }}
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('Pedidos') }}">Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('pedidos') }}">Ver todas</a></li>
                    <li><a href="{{ URL::to('pedidos/create') }}">Crear </a>
                </ul>
            </nav>

            <h1>Todas </h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
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
                        <td>{{ $value->id }}</td>
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

                        <!-- we will also add show, edit, and delete buttons -->
                        <td>                            
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('pedidos/' . $value->id) }}">Detalle</a>

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('pedidos/' . $value->id . '/edit') }}">Editar</a>
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            {{ Form::open(array('url' => 'pedidos/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>