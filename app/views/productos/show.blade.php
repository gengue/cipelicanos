<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Producto <small>Editar producto</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProductos();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>
    
 
    <div class="jumbotron text-center">
        <h2>{{ $producto->nombre }}</h2>
        <p>
            <strong>Descripcion:</strong> {{ $producto->descripcion }}<br>
            <strong>Proveedor:</strong> {{ $proveedor->nombre }}
        </p>
    </div>

</div>
