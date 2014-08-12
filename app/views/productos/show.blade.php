<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Dashboard <small>Administrador</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <nav class="navbar navbar-inverse">

        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('productos') }}">Ver todos los productos</a></li>
            <li><a href="{{ URL::to('productos/create') }}">Crear producto</a>
        </ul>
    </nav>

    <h1>Detalle de {{ $producto->nombre }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $producto->nombre }}</h2>
        <p>
            <strong>Descripcion:</strong> {{ $producto->descripcion }}<br>
            <strong>Proveedor:</strong> {{ $proveedor->nombre }}
        </p>
    </div>

</div>
