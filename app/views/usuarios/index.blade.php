<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuarios <small>Todos los usuarios</small>
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
                    <a class="btn btn-small btn-success" href="{{ URL::to('usuarios/' . $value->id) }}">Detalle</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $value->id . '/edit') }}">Editar</a>
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    {{ Form::open(array('url' => 'usuarios/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>