<div class="container-fluid">

            <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuarios <small>Agregar usuario</small>
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
            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('url' => 'usuarios','id' => 'formUsuarios')) }}

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
                {{ Form::select('pais', array('COL' => 'Colombia'), null, array('class'=>'form-control','style'=>'' )) }}
            </div>
            <div class="form-group">
                {{ Form::label('ciudad', 'Ciudad') }}
                {{ Form::select('ciudad', array('CHV' => 'Chivolo'), null, array('class'=>'form-control','style'=>'' )) }}
            </div>
            {{ Form::submit('Crear Usuario!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
<script>

    $("#formUsuarios").submit(function(e) {
        e.preventDefault();
        
        var datos =  $("#formUsuarios").serialize();
       crearUsuarios(datos);
    });

</script>