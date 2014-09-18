<div class="container-fluid">

     <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Proveedores <small>Mostrar Proveedor</small>
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
              <h3 class="panel-title">{{ $proveedor->nombre }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information" id="usuariosTbl">
                    
                      <tbody>
                     
                        <tr>
                        <td>Nombre de Contacto:</td>
                        <td>{{ $proveedor->nombre_contacto }}</td>
                      </tr>
                      <tr>
                        <td>Telefono:</td>
                         <td>{{ $proveedor->telefono }}</tr>
                       <tr>
                        <td>Direccion:</td>
                        <td>{{ $proveedor->direccion }}</td>
                      </tr>
                       <tr>
                        <td>Email:</td>
                        <td>{{ $proveedor->correo }}</td>
                      </tr>
                      <tr>
                        <td>Productos:</td>
                        <td>@foreach($proveedor->productos as $key => $value)
                         <a href="javascript:mostrarDetalleProducto({{ $value->id }})">{{ $value->nombre }}</a>
                         <br>@endforeach</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                  <a class="btn btn-small btn-info" href="javascript:abrirProveedores();"><i class="fa fa-arrow-left"></i> Atras</a>
                 </div>
          </div>
        </div>
    </div>
