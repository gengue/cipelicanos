<div class="container-fluid">

    <nav class="navbar navbar-inverse">

        <ul class="nav navbar-nav">
            <li><a href="javascript:abrirProveedores();">Ver todos los proveedores</a></li>
            <li><a href="javascript:mostrarCrearProveedor();">Crear un proveedor</a>
        </ul>
    </nav>

    <h1>Editar {{ $proveedor->nombre }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($proveedor, array('route' => array('proveedores.update', $proveedor->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('nombre_contacto', 'Nombre de Contacto') }}
        {{ Form::text('nombre_contacto', Input::old('nombre de contacto'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('telefono', 'Telefono') }}
        {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('direccion', 'Direccion') }}
        {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('correo', 'Email') }}
        {{ Form::text('correo', Input::old('email'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Editar proveedor!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>