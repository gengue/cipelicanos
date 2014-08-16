<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-suitcase"></i> Proveedores <small>Todos los proveedores</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    
    <a class="btn btn-small btn-info" href="javascript:abrirProveedores();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearProveedores();"><i class="fa fa-plus"></i> Agregar Proveedor</a>
    <br><br>



    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Nombre de Contacto</td>
                <td>Telefono</td>
                <td>Direccion</td>
                <td>Correo</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nombre }}</td>
                <td>{{ $value->nombre_contacto }}</td>
                <td>{{ $value->telefono }}</td>
                <td>{{ $value->direccion }}</td>
                <td>{{ $value->correo }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>                            
                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->

                    <a class="btn btn-small btn-success" href= "javascript:mostrarDetalleProveedores({{$value->id}});" title="Ver Detalles"><i class="fa fa-search" ></i></a>
                    <a class="btn btn-small btn-info" href="javascript:mostrarEditarProveedores({{ $value->id}});" title="Modificar" ><i class="fa fa-pencil" ></i></a>
                    <a class="btn btn-small btn-danger" href="javascript:eliminarProveedores({{ $value->id }});" title="Eliminar"><i class="fa fa-trash-o" ></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<script>
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Proveedores")').parent().addClass("active");
</script>