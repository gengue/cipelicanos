<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>CRUDS</title>
        {{ HTML::style('css/bootstrap.css') }}
    </head>
    <body>
        <div class="container">


            <h1>Todos los CRUDS</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            
            <ul>
                <li><a href="{{ URL::to('companias') }}">Compañias</a></li>
                <li><a href="{{ URL::to('container') }}">Container</a></li>
                <li><a href="{{ URL::to('guias') }}">Guias</a></li>
                <li><a href="{{ URL::to('naviera') }}">Navieras</a></li>
                <li><a href="{{ URL::to('usuarios') }}">Usuarios</a></li>
                <li><a href="{{ URL::to('proveedores') }}">Proveedores</a></li>
            </ul>
        </div>
    </body>
</html>