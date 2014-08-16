<div class="container-fluid">
<<<<<<< HEAD
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Proveedor <small>Mostrar Proveedor</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProveedores();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>
=======

    <nav class="navbar navbar-inverse">

        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('proveedores') }}">Ver todas los proveedores</a></li>
            <li><a href="{{ URL::to('proveedores/create') }}">Crear proveedor</a>
        </ul>
    </nav>

    <h1>Detalle de {{ $proveedor->nombre }}</h1>
>>>>>>> 19fe4703a942918e026c954f1c83e7af2d85d76e

    <div class="jumbotron text-center">
        <h2>{{ $proveedor->nombre }}</h2>
        <p>
            <strong>Nombre de Contacto:</strong> {{ $proveedor->nombre_contacto }}<br>
<<<<<<< HEAD
            <strong>Telefono:</strong> {{ $proveedor->telefono }}<br>
            <strong>Direccion:</strong> {{ $proveedor->direccion }}<br>
            <strong>Email:</strong> {{ $proveedor->correo }}<br>
=======
            <strong>Telefono:</strong> {{ $proveedor->telefono }}
            <strong>Direccion:</strong> {{ $proveedor->direccion }}
            <strong>Email:</strong> {{ $proveedor->correo }}
>>>>>>> 19fe4703a942918e026c954f1c83e7af2d85d76e
        </p>
    </div>

</div>