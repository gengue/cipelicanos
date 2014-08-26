<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuario <small>Mostrar Usuario</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirUsuarios();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>

    <div class="jumbotron text-center">
        <h2>{{ $usuarios->nombre }}</h2>
        <p>
            <strong>Tipo Usuario:</strong> {{ $usuarios->tipo_usuario }}<br>
            <strong>Nombres:</strong> {{ $usuarios->nombre }}<br>
            <strong>Apellidos:</strong> {{ $usuarios->apellido }}<br>
            <strong>Telefono:</strong> {{ $usuarios->telefono }}<br>
        </p>
    </div>

</div>