<!DOCTYPE html>
<html>
    <head>
        <title>C.I Pelicanos Admin - Productos</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">                
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('productos') }}">Ver todos los productos</a></li>
                    <li><a href="{{ URL::to('productos/create') }}">Crear producto</a>
                </ul>
            </nav>

            <h1>Todas los Productos</h1>

            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Proveedor</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->nombre }}</td>
                        <td>{{ $value->descripcion }}</td>
                        <td>{{ $value->nombreprov }}</td>

                        <td>                            
                            <a class="btn btn-small btn-success" href="{{ URL::to('productos/' . $value->id) }}">Detalle</a>
                            <a class="btn btn-small btn-info" href="{{ URL::to('productos/' . $value->id . '/edit') }}">Editar</a>

                            {{ Form::open(array('url' => 'productos/' . $value->id, 'class' => 'pull-right')) }}
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