<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-anchor"></i> Navieras <small>Todas las navieras</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirNavieras();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearNaviera();"><i class="fa fa-plus"></i> Agregar naviera</a>
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
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($navieras as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nombre }}</td>
                <td>{{ $value->nombre_contacto }}</td>
                <td>{{ $value->telefono }}</td>
                <td>{{ $value->direccion }}</td>


                <td>                            
                    <a class="btn btn-small btn-success" href="javascript:mostrarDetalleNaviera({{ $value->id }});"><i class="fa fa-search"></i></a>
                    <a class="btn btn-small btn-info" href="javascript:mostrarEditarNaviera({{ $value->id }});"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-small btn-danger" href="javascript:eliminarNaviera({{ $value->id }});"><i class="fa fa-trash-o"></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<script>
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Navieras")').parent().addClass("active");
</script>