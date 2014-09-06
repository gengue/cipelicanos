<!DOCTYPE html>
<html>
    <head>
        <title>CRUDS</title>
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('dropzone/downloads/css/dropzone.css') }}
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
                <li><a href="{{ URL::to('navieras') }}">Navieras</a></li>
                <li><a href="{{ URL::to('usuarios') }}">Usuarios</a></li>
                <li><a href="{{ URL::to('proveedores') }}">Proveedores</a></li>
                <li><a href="{{ URL::to('productos') }}">Productos</a></li>
                <li><a href="{{ URL::to('pedidos') }}">Pedidos</a></li>
            </ul>
            
                {{Form::open(array(
                'url'=>'upload',
                'files'=>true,
                'class'=>'dropzone',
                'id'=>'my-dropzone',
                'method'=>'post',
                
                ))}}
              {{Form::close()}}
        </div>
    </body>
</html>
<script src="js/plugins/jquery-1.11.0.js"></script>
<script src="dropzone/downloads/dropzone.js"></script>