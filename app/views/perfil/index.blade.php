


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-users"></i> Datos Personales <small>Perf&iacute;l de usuario</small>
            </h1>
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">{{ ' '.Auth::user()->nombre;}}{{ ' '.Auth::user()->apellido;}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information" id="usuariosTbl">
                    @foreach($perfil as $key => $value)
                      <tbody>
                     
                        <tr>
                        <td>Tipo de usuario:</td>
                        <td>{{ $value->tipo_usuario }}</td>
                      </tr>
                      <tr>
                        <td>Nombre completo:</td>
                         <td>{{ $value->nombre }} {{ $value->apellido }}</td>
                      </tr>
                      <tr>
                        <td>Tel&eacute;fono :</td>
                        <td>{{ $value->telefono }}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>E-mail :</td>
                         <td>{{ $value->correo }}</td>
                      </tr>
                        <tr>
                        <td>Direcci&oacute;n :</td>
                        <td>{{ $value->direccion }}</td>
                      </tr>
                      <tr>
                        <td>Pa&iacute;s :</td>
                        <td>{{ $value->pais->nombre }}</td>
                      </tr>
                      <tr>  
                        <td>Ciudad :</td>
                        <td>{{ $value->ciudad->nombre }}</td>
                           
                      </tr>
                       <tr>  
                        <td>Estado :</td>
                         <td>{{ $value->estado }}</td>
                           
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                  <a class="btn btn-small btn-primary" href="javascript:mostrarEditarPerfil({{ $value->id }});">Editar <i class="fa fa-pencil"></i></a>
                  <a class="btn btn-small btn-success" href="javascript:mostrarCambiarPassword({{ $value->id }});">Cambiar contrase&ntilde;a <i class="fa fa-lock"></i></a>
                 </div>
            
          </div>
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
                            {{ Form::label('password_vieja', 'Contraseña actual') }}
                            {{ Form::password('password_vieja', Input::old('password'), array('class' => 'form-control')) }}
                        </div>
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
        
</div>
<script type="text/javascript">
  $("input[type=password]").addClass('form-control');                  

  $("#formCambiarPassword").submit(function(e) {
      e.preventDefault();
      
      if ($('#password_vieja').val() !=="" && $('#password_nueva').val()!== "" && $('#password_nueva2').val() !== "") {
         actualizarPassword($("#formCambiarPassword").serialize());
      } else {
          alert("Todos los campos son obligatorios", "Error", "error");
      }
  });
</script>
