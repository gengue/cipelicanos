<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuarios <small>Editar Usuario</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirUsuarios();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>

    {{ Form::model($usuario, array('route' => array('usuarios.update', $usuario->id),'id' => 'formEditarUsuario', 'method' => 'PUT')) }}


    <div class="form-group">
        {{ Form::label('tipo_usuario', 'Tipo de Usuario') }}
        {{ Form::select('tipo_usuario', array('ADMINISTRADOR' => 'Administrador', 'CLIENTE' => 'Cliente', 'DIGITADOR' => 'Digitador'), null, array('class'=>'form-control','style'=>'' )) }}
    </div>
    <div class="form-group">
        {{ Form::label('correo', 'Email') }}
        {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::text('password', Input::old(''), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('apellido', 'Apellidos') }}
        {{ Form::text('apellido', Input::old(''), array('class' => 'form-control')) }}
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
        {{ Form::label('pais', 'Pais') }}
        {{ Form::select('pais', $paises, $usuario->pais_id, array('class'=>'form-control','style'=>'' )) }}
    </div>
    <div class="form-group">
        {{ Form::label('ciudad', 'Ciudad') }}
        {{ Form::select('ciudad',$ciudades, $usuario->ciudad_id, array('class'=>'form-control','style'=>'' )) }}
    </div>

    {{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
<script>

    $("#formEditarUsuario").submit(function(e) {
        e.preventDefault();
        var datos = $("#formEditarUsuario").serialize();
                editarUsuarios(datos, {{ $usuario -> id }});
    });
    
    $("#pais").on('change', function(ev) {
        cargarCiudades($(this).val());
    });
</script>
