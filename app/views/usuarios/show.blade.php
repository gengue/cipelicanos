<div class="container-fluid">

     <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuario <small>Mostrar usuario</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:{{ ' '.Auth::user()->ultimo_acceso;}}
                </li>
            </ol>
        </div>
    </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">{{ $usuarios->nombre }}  {{ $usuarios->apellido }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information" id="usuariosTbl">
                    
                      <tbody>
                     
                        <tr>
                        <td>Tipo de usuario:</td>
                        <td>{{ $usuarios->tipo_usuario }}</td>
                      </tr>
                      <tr>
                        <td>Nombre: </td>
                         <td>{{ $usuarios->nombre }}</tr>
                       <tr>
                        <td>Apellido:</td>
                        <td>{{ $usuarios->apellido }}</td>
                      </tr>
                       <tr>
                        <td>E-mail:</td>
                        <td>{{ $usuarios->correo }}</td>
                      </tr>
                      <tr>
                        <td>Tel&eacute;fono:</td>
                        <td>{{ $usuarios->telefono }}</td>
                      </tr>
                      <tr>
                       
                        <td>Direcci&oacute;n:</td>
                        <td>{{ $usuarios->direccion }}</td>
                      </tr>
                      <tr>
                        <td>Pa&iacute;s:</td>
                        <td>{{ $usuarios->pais->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Ciudad:</td>
                        <td>{{$usuarios->ciudad->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Estado:</td>
                        <td>{{$usuarios->estado }}</td>
                      </tr>
                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                  <a class="btn btn-small btn-info" href="javascript:abrirUsuarios();"><i class="fa fa-arrow-left"></i> Atr&aacute;s</a>
                 </div>
          </div>
        </div>
    </div>



