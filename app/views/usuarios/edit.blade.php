<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuarios <small>Editar Usuario</small>
            </h1>
           
        </div>
    </div>
    <a class="btn btn-small btn-info" onClick="javascript:abrirUsuarios();"><i class="fa fa-arrow-left"></i> Atras</a>
    <a class="btn btn-small btn-success" onClick="javascript:mostrarCambiarPassword();">Cambiar contraseña <i class="fa fa-lock"></i></a>
    <br><br>

    {{ Form::model($usuario, array('route' => array('usuarios.update', $usuario->id),'id' => 'formEditarUsuario', 'method' => 'PUT')) }}


    <div class="row">
        <div class="col-md-6">
            {{ Form::label('tipo_usuario', 'Tipo de Usuario') }}
            {{ Form::select('tipo_usuario', array('ADMINISTRADOR' => 'Administrador', 'CLIENTE' => 'cliente', 'DIGITADOR' => 'Digitador'), null, array('class'=>'form-control','style'=>'' )) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('correo', 'Email') }}
            {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('nombre', 'Nombre') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('apellido', 'Apellidos') }}
            {{ Form::text('apellido', Input::old(''), array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{ Form::label('pais', 'Pais') }}
            {{Form::select('pais', $paises, $usuario->pais_id, array('class'=>'form-control','style'=>'' )) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('ciudad', 'Ciudad') }}
            {{ Form::select('ciudad',$ciudades, $usuario->ciudad_id, array('class'=>'form-control','style'=>'' )) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{ Form::label('telefono', 'Telefono') }}
            {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('direccion', 'Direccion') }}
            {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
        </div>
    </div>
    <br/>
         
    <a class="btn btn-small btn-danger" onClick="javascript:abrirUsuarios();">Cancelar</a>
    {{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
   
</div>
        <!-- Modal para cambiar password -->
        <div class="modal fade" id="modalCambiarPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cambiar contraseña</h4>
                    </div>

                    <div class="modal-body form-horizontal">
                    
                    {{ Form::open(array('id' => 'formCambiarPassword')) }}
                    
                        
                        <div class="form-group">
                            {{ Form::label('password_nueva', 'Nueva contraseña') }}
                            {{ Form::password('password_nueva', Input::old('nueva password'), array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password_nueva2', 'Confirmar contraseña') }}
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


