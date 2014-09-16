<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Proveedores <small>Editar proveedores</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProveedores();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}


    {{ Form::model($proveedor, array('route' => array('proveedores.update', $proveedor->id),'id' => 'formEditarProveedor', 'method' => 'PUT')) }}

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
    <a class="btn btn-small btn-danger" href="javascript:abrirProveedores();">Cancelar</a>
    {{ Form::submit('Editar proveedor!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


</div>
<script>

    $("#formEditarProveedor").submit(function(e) {
        e.preventDefault();       
        var datos = $("#formEditarProveedor").serialize();
        editarProveedores(datos, {{ $proveedor->id }});
    });

</script>
