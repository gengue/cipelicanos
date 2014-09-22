<div class="container-fluid">

            <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuarios <small>Agregar usuario</small>
            </h1>
            
        </div>
    </div>

    <a class="btn btn-small btn-info" href="javascript:abrirUsuarios();"><i class="fa fa-arrow-left"></i> Atr&aacute;s</a>
   <br><br>
          
            {{ Form::open(array('url' => 'usuarios','id' => 'formUsuarios')) }}


            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('tipo_usuario', 'Tipo de usuario') }}
                    {{ Form::select('tipo_usuario', array('ADMINISTRADOR' => 'Administrador', 'CLIENTE' => 'Cliente', 'DIGITADOR' => 'Digitador'), null, array('class'=>'form-control','style'=>'' )) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('correo', 'E-mail del usuario') }}
                    {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('nombre', 'Nombres del usuario') }}
                    {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('apellido', 'Apellidos del usuario') }}
                    {{ Form::text('apellido', Input::old(''), array('class' => 'form-control')) }}
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('password', 'Contrase&ntilde;a del usuario') }}
                    {{ Form::text('password', Input::old(''), array('class' => 'form-control')) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('telefono', 'Tel&eacute;fono del usuario') }}
                    {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('pais', 'Pa&iacute;s de residencia') }}
                    {{ Form::select('pais', $paises, null, array('class'=>'form-control','style'=>'' )) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('ciudad', 'Ciudad de residencia') }}
                    {{ Form::select('ciudad', array(), null, array('class'=>'form-control','style'=>'' )) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('direccion', 'Direcci&oacute;n de residencia') }}
                {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
            </div>
            <a class="btn btn-small btn-danger" href="javascript:abrirUsuarios();">Cancelar</a>
            {{ Form::submit('Crear usuario!', array('class' => 'btn btn-primary')) }}
            
            {{ Form::close() }}

        </div>
<script>

    $("#formUsuarios").submit(function(e) {
        e.preventDefault();
        
        if(!validarCampoNulo($("#ciudad"))) {
            return false;
        }

        if(!validarCampoVacio($("#correo"))) {
            return false;
        }

        if(!validarEmail($("#correo"))) {
            return false; 
        }

        if(!validarCampoVacio($("#nombre"))) {
            return false;
        }

        if(!validarCampoVacio($("#apellido"))) {
            return false;
        }

        if(!validarCampoVacio($("#password"))) {
            return false;
        }


        var datos =  $("#formUsuarios").serialize();
        crearUsuarios(datos);
    });
    
    $("#pais").on('change', function(ev) {
        cargarCiudades($(this).val());
     });

</script>
