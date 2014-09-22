<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuarios <small>Editar usuario</small>
            </h1>
           
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirUsuarios();"><i class="fa fa-arrow-left"></i> Atr&aacute;s</a>
    <a class="btn btn-small btn-success" href="javascript:mostrarCambiarPassword();">Cambiar contrase&ntilde;a <i class="fa fa-lock"></i></a>
    <br><br>

    {{ Form::model($usuario, array('route' => array('usuarios.update', $usuario->id),'id' => 'formEditarUsuario', 'method' => 'PUT')) }}


    <div class="row">
        <div class="col-md-6">
            {{ Form::label('tipo_usuario', 'Tipo de usuario') }}
            {{ Form::select('tipo_usuario', array('ADMINISTRADOR' => 'Administrador', 'CLIENTE' => 'cliente', 'DIGITADOR' => 'Digitador'), null, array('class'=>'form-control','style'=>'' )) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('correo', 'E-mail del usuario') }}
            {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
        </div>
    </div>
    <br>
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
    <br>
    <div class="row">
        <div class="col-md-6">
            {{ Form::label('pais', 'Pa&iacute;s de residencia') }}
            {{Form::select('pais', $paises, $usuario->pais_id, array('class'=>'form-control','style'=>'' )) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('ciudad', 'Ciudad de residencia') }}
            {{ Form::select('ciudad',$ciudades, $usuario->ciudad_id, array('class'=>'form-control','style'=>'' )) }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-5">
            {{ Form::label('telefono', 'Tel&eacute;fono del usuario') }}
            {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-5">
            {{ Form::label('direccion', 'Direcci&oacute;n de residencia') }}
            {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-2">
            {{ Form::label('estado', 'Estado') }}
            {{ Form::select('estado', array('ACTIVO'=>'ACTIVO', 'INACTIVO'=>'INACTIVO'), $usuario->estado ,array('class' => 'form-control')) }}
        </div>
    </div>
    
    <br/>
         
    <a class="btn btn-small btn-danger" href="javascript:abrirUsuarios();">Cancelar</a>
    {{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
   
</div>
        <!-- Modal para cambiar password -->
        <div class="modal fade" id="modalCambiarPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cambiar contrase&ntilde;a</h4>
                    </div>

                    <div class="modal-body form-horizontal">
                    
                    {{ Form::open(array('id' => 'formCambiarPassword')) }}
                    
                        
                        <div class="form-group">
                            {{ Form::label('password_nueva', 'Nueva contrase&ntilde;a') }}
                            {{ Form::password('password_nueva', Input::old('nueva password'), array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password_nueva2', 'Confirmar contrase&ntilde;a') }}
                            {{ Form::password('password_nueva2', Input::old('confimar password'), array('class' => 'form-control')) }}
                        </div>

                  <div class="modal-footer">
                      <button href="#" class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                      {{ Form::submit('Cambiar contraseña!', array('class' => 'btn btn-primary', 'id'=>'btnsubmit')) }}

                      {{ Form::close() }}
                  </div>

                </div>
            </div>
        </div>
<!-- FIN Modal-->
<script>

    $("#formEditarUsuario").submit(function(e) {
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

        var datos = $("#formEditarUsuario").serialize();
                editarUsuarios(datos, {{ $usuario -> id }});
    });
    
    $("#pais").on('change', function(ev) {
        cargarCiudades($(this).val());
    });

    $("input[type=password]").addClass('form-control');                  

    $("#formCambiarPassword").submit(function(e) {
      e.preventDefault();
      if ($('#password_nueva').val()!== "" && $('#password_nueva2').val()!== "" ) {
         actualizarPasswordUsuario($("#formCambiarPassword").serialize(), {{ $usuario->id }});
      } else {
          alert("Todos los campos son obligatorios", "Error", "error");
      }
  });
</script>


