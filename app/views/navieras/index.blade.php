<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>C.I Pelicanos Admin - Navieras</title>
        {{ HTML::style('css/bootstrap.css') }}
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">

                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('navieras') }}">Ver todas las Navieras</a></li>
                    <li><a href="{{ URL::to('navieras/create') }}">Crear Naviera</a>
                </ul>
            </nav>

            <h1>Todas las navieras</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Nombre de Contacto</td>
                        <td>Telefono</td>
                        <td>Direccion</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($navieras as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->nombre }}</td>
                        <td>{{ $value->nombre_contacto }}</td>
                        <td>{{ $value->telefono }}</td>
                        <td>{{ $value->direccion }}</td>

                        <!-- we will also add show, edit, and delete buttons -->
                        <td>                            
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('naviera/' . $value->id) }}">Detalle</a>

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('naviera/' . $value->id . '/edit') }}">Editar</a>
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            {{ Form::open(array('url' => 'navieras/' . $value->id, 'class' => 'pull-right')) }}
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