<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Producto <small>Editar producto</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProductos();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>
    
 
    <div class="jumbotron text-center">
        <h2>{{ $producto->nombre }}</h2>
        <p>
            <strong>Descripcion:</strong> {{ $producto->descripcion }}<br>
            <strong>Proveedor:</strong> {{ $producto->proveedor->nombre }}
        </p>
    </div>

</div>
