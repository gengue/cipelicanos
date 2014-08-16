<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-users"></i> Usuarios <small>Todos los usuarios</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>

    <a class="btn btn-small btn-info" href="javascript:abrirUsuarios();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearUsuario();"><i class="fa fa-plus"></i> Agregar usuario</a>
    <br><br>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Tipo Usuario</td>
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
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->tipo_usuario }}</td>
                <td>{{ $value->nombre }}</td>
                <td>{{ $value->apellido }}</td>
                <td>{{ $value->telefono }}</td>
                <td>{{ $value->correo }}</td>
                <td>{{ $value->direccion }}</td>
                <td>{{ $value->pais }}</td>
                <td>{{ $value->ciudad }}</td>
                <td>{{ $value->estado }}</td>


                <!-- we will also add show, edit, and delete buttons -->
                <td>                            
                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href= "javascript:mostrarDetalleUsuarios({{$value->id}});" title="Ver Detalles"><i class="fa fa-search" ></i></a>
                    <a class="btn btn-small btn-info" href="javascript:mostrarEditarUsuarios({{ $value->id}});" title="Modificar" ><i class="fa fa-pencil" ></i></a>
                    <a class="btn btn-small btn-danger" href="javascript:eliminarUsuarios({{ $value->id }});" title="Eliminar"><i class="fa fa-trash-o" ></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<script>
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Usuarios")').parent().addClass("active");
</script>