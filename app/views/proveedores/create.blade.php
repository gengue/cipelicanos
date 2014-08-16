<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Proveedores <small>Agregar un proveedor</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProveedores();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

<<<<<<< HEAD
    {{ Form::open(array('url' => 'proveedores', 'id' => 'formProveedores')) }}
=======
    {{ Form::open(array('url' => 'proveedores')) }}
>>>>>>> 19fe4703a942918e026c954f1c83e7af2d85d76e

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
        {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Crear Proveedor!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

<<<<<<< HEAD
</div>

<script>

    $("#formProveedores").submit(function(e) {
        e.preventDefault();
        
        var datos =  $("#formProveedores").serialize();
        crearProveedor(datos);
    });

</script>
=======
</div>
>>>>>>> 19fe4703a942918e026c954f1c83e7af2d85d76e
