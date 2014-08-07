
<!DOCTYPE html>
<html>
    <head>
        <title>C.I Pelicamos admin - Productos</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('productos') }}">Ver todos los productos</a></li>
                    <li><a href="{{ URL::to('productos/create') }}">Crear un producto</a>
                </ul>
            </nav>

            <h1>Crear un producto</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('url' => 'productos')) }}

            <div class="form-group">
                {{ Form::label('nombre', 'Nombre') }}
                {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('descripcion', 'Descripcion') }}
                {{ Form::text('descripcion', Input::old('Descripcion'), array('class' => 'form-control')) }}
            </div>          
            <div class="form-group">
                {{ Form::label('proveedor', 'Proveedor') }}
                {{ Form::select('proveedor', $proveedores, Input::old('Selecciona uno'), array('class' => 'form-control')) }}
            </div>	

            {{ Form::submit('Crear Producto!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>