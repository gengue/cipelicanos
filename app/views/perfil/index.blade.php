


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-users"></i> Datos Personales <small>Perfil de Usuario</small>
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
                        <td>Tipo de Usuario:</td>
                        <td>{{ $value->tipo_usuario }}</td>
                      </tr>
                      <tr>
                        <td>Nombre Completo:</td>
                         <td>{{ $value->nombre }} {{ $value->apellido }}</td>
                      </tr>
                      <tr>
                        <td>Telefono :</td>
                        <td>{{ $value->telefono }}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Correo Electronico :</td>
                         <td>{{ $value->correo }}</td>
                      </tr>
                        <tr>
                        <td>Direccion :</td>
                        <td>{{ $value->direccion }}</td>
                      </tr>
                      <tr>
                        <td>Pais :</td>
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
                  <a class="btn btn-small btn-info" href="javascript:mostrarEditarPerfil({{ $value->id }});">Editar <i class="fa fa-pencil"></i></a>
                 </div>
            
          </div>
        </div>
</div>

<script>
   
</script>
