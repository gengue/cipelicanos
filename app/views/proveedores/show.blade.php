<div class="container-fluid">
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

    <div class="jumbotron text-center">
        <h2>{{ $proveedor->nombre }}</h2>
        <p>
            <strong>Nombre de Contacto:</strong> {{ $proveedor->nombre_contacto }}<br>
            <strong>Telefono:</strong> {{ $proveedor->telefono }}<br>
            <strong>Direccion:</strong> {{ $proveedor->direccion }}<br>
            <strong>Email:</strong> {{ $proveedor->correo }}<br>
        </p>
    </div>

</div>