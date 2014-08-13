<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Productos <small>Todos los productos</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProductos();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearProducto();"><i class="fa fa-plus"></i> Agregar Producto</a>
    <br><br>
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Proveedor</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nombre }}</td>
                <td>{{ $value->descripcion }}</td>
                <td>{{ $value->nombreprov }}</td>

                <td>                            
                    <a class="btn btn-small btn-success" href="javascript:mostrarDetalleProducto({{ $value->id }});"><i class="fa fa-search"></i></a>
                    <a class="btn btn-small btn-info" href="javascript:mostrarEditarProducto({{ $value->id }});"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-small btn-danger" href="javascript:eliminarProducto({{ $value->id }});"><i class="fa fa-trash-o"></i></a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<script>
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Productos")').parent().addClass("active");
</script>