<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-suitcase"></i> Proveedores <small>Todos los proveedores</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>

    <a class="btn btn-small btn-info" href="javascript:abrirProveedores();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearProveedores();"><i class="fa fa-plus"></i> Agregar Proveedor</a>
    <br><br>



    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
 <div class="table-responsive">
    <table id="proveedoresTbl" class="table display table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>                
                <td data-class="expand">Nombre</td>
                <td>Nombre de Contacto</td>
                <td data-hide="phone">Telefono</td>
                <td data-hide="phone,tablet">Direccion</td>
                <td data-hide="phone,tablet">Correo</td>
                <td data-hide="phone">Opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $key => $value)
            <tr>
                <td>{{ $value->nombre }}</td>
                <td>{{ $value->nombre_contacto }}</td>
                <td>{{ $value->telefono }}</td>
                <td>{{ $value->direccion }}</td>
                <td>{{ $value->correo }}</td>

                <td>                            
                    
                    <a class="btn btn-small btn-success" href= "javascript:mostrarDetalleProveedores({{$value->id}});" title="Ver Detalles"><i class="fa fa-search" ></i></a>
                    <a class="btn btn-small btn-info" href="javascript:mostrarEditarProveedores({{ $value->id}});" title="Modificar" ><i class="fa fa-pencil" ></i></a>
                    <a class="btn btn-small btn-danger" data-toggle="confirmation" data-href="javascript:eliminarProveedores({{ $value->id }});" href="javascript:eliminarProveedores({{ $value->id }});" title="Eliminar"><i class="fa fa-trash-o" ></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 </div>
</div>
<script>
    $('[data-toggle="confirmation"]').confirmation();
    "use strict";
    var responsiveHelper = undefined;
    var breakpointDefinition = {
        tablet: 1024,
        phone: 480
    };
    var tableElement = $('#proveedoresTbl');
    tableElement.dataTable({
        autoWidth: false,
        preDrawCallback: function() {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper) {
                responsiveHelper = new ResponsiveDatatablesHelper(tableElement, breakpointDefinition);
            }
        },
        rowCallback: function(nRow) {
            responsiveHelper.createExpandIcon(nRow);
        },
        drawCallback: function(oSettings) {
            responsiveHelper.respond();
        }
    });
    
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Proveedores")').parent().addClass("active");
</script>