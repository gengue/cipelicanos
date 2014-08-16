<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-money"></i> Clientes <small>Todos los clientes</small>
            </h1>
            
      
    
    @if($usuarios->pendientes == 'SI')
        <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-times"></i> Clientes sin verificar:</li>
        </ol>
        <div class='table-responsive'>
           <table class="table table-striped table-condensed table-hover">
               <thead>
                   <tr>
                       <td>Nombre</td>
                       <td>Apellidos</td>
                       <td>Telefono</td>
                       <td>Correo</td>
                       <td>Direccion</td>
                       <td>Pais</td>
                       <td>Ciudad</td>
                       <td>Estado</td>
                       <td>Opciones</td>
                   </tr>
               </thead>
               <tbody>
                   @foreach($usuarios as $key => $value)
                   @if($value->estado == 'INACTIVO')
                   <tr>
                       <td class="danger">{{ $value->nombre }}</td>
                       <td class="danger">{{ $value->apellido }}</td>
                       <td class="danger">{{ $value->telefono }}</td>
                       <td class="danger">{{ $value->correo }}</td>
                       <td class="danger">{{ $value->direccion }}</td>
                       <td class="danger">{{ $value->pais }}</td>
                       <td class="danger">{{ $value->ciudad }}</td>
                       <td class="danger">{{ $value->estado }}</td>

                       <td class="danger">                            
                           <a class="btn btn-small btn-info" href="javascript:aprobarCliente(true, {{ $value->id }});"><i class="fa fa-thumbs-o-up"></i></a>
                           <a class="btn btn-small btn-danger" href="javascript:aprobarCliente(false, {{ $value->id }});"><i class="fa fa-thumbs-o-down"></i></a>
                     </td>
                   </tr>
                   @endif
                   @endforeach

               </tbody>
           </table>
       </div>
    </div>
    </div>
    @else
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-times"></i> Clientes sin verificar: </li>
                    No hay clientes pendientes de verificacion.
            </ol>
    @endif
    </div>
    </div>

    <ol class="breadcrumb">
        <li class="active">
            <i class="fa fa-check"></i> Clientes activos:</li>
    </ol>
    <div class='table-responsive'>
        <table class="table table-striped table-condensed table-bordered table-hover">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Telefono</td>
                    <td>Correo</td>
                    <td>Direccion</td>
                    <td>Pais</td>
                    <td>Ciudad</td>
                    <td>Opciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $key => $value)
                <tr>
                    <td>{{ $value->nombre }}</td>
                    <td>{{ $value->apellido }}</td>
                    <td>{{ $value->telefono }}</td>
                    <td>{{ $value->correo }}</td>
                    <td>{{ $value->direccion }}</td>
                    <td>{{ $value->pais }}</td>
                    <td>{{ $value->ciudad }}</td>

                    <td>                            
<<<<<<< HEAD
                        <a class="btn btn-small btn-success" href="javascript:mostrarDetalleClientes({{ $value->id }});"><i class="fa fa-search"></i></a>
                        <a class="btn btn-small btn-danger" href="javascript:eliminarClientes({{ $value->id }});"><i class="fa fa-trash-o"></i></a>
=======
                        <a class="btn btn-small btn-success" href="javascript:msg_noimplementado();"><i class="fa fa-search"></i></a>
                        <a class="btn btn-small btn-danger" href="javascript:msg_noimplementado();"><i class="fa fa-trash-o"></i></a>
>>>>>>> 19fe4703a942918e026c954f1c83e7af2d85d76e
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Clientes")').parent().addClass("active");
</script>