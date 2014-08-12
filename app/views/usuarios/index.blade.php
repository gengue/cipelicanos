<!DOCTYPE html>
<html>
    <head>
        <title>C.I Pelicanos Admin - Usuarios</title>
        {{ HTML::style('css/bootstrap.css') }}
     
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">                
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('usuarios') }}">Ver todos</a></li>
                    <li><a href="{{ URL::to('usuarios/create') }}">Crear</a>
                </ul>
            </nav>

            <h1>Todas</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Tipo Usuario</td>
                        <td>Nombre</td>
                        <td>Apellidos</td>
                        <td>Telefono</td>
                        <td>Correo</td>
                        <td>Direccion</td>
                        <td>Pais</td>
                        <td>Ciudad</td>
                        <td>Estado</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->tipo_usuario }}</td>
                        <td>{{ $value->nombre }}</td>
                        <td>{{ $value->apellido }}</td>
                        <td>{{ $value->telefono }}</td>
                        <td>{{ $value->correo }}</td>
                        <td>{{ $value->direccion }}</td>
                        <td>{{ $value->pais }}</td>
                        <td>{{ $value->ciudad }}</td>
                        <td>{{ $value->estado }}</td>
                        

                        <!-- we will also add show, edit, and delete buttons -->
                        <td>                            
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('usuarios/' . $value->id) }}">Detalle</a>

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $value->id . '/edit') }}">Editar</a>
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            {{ Form::open(array('url' => 'usuarios/' . $value->id, 'class' => 'pull-right')) }}
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