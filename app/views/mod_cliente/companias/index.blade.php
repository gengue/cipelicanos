<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-fw fa-university"></i> Compa&ntilde;ias <small>Todas las compa&ntilde;ias</small></h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirCompanias();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearCompanias();"><i class="fa fa-plus"></i> Agregar compa&ntilde;ia</a>
    <br>
    <br>
    <div class="table-responsive">
        <table id="companiasTbl" class="table table-striped table-bordered">
            <thead>
                <tr>

                    <td data-class="expand">Nombre</td>
                    <td data-hide="phone,tablet">NIT</td>
                    <td data-hide="phone, tablet">Telefono</td>
                    <td>Correo</td>
                    <td data-hide="phone">Opciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($companias as $key => $value)
                <tr>

                    <td>{{ $value->nombre }}</td>
                    <td>{{ $value->nit }}</td>
                    <td>{{ $value->telefono }}</td>
                    <td>{{ $value->correo}}</td>

                    <td>
                        <a class="btn btn-small btn-success" href="javascript:mostrarDetalleCompania({{ $value->id }});"><i class="fa fa-search"></i></a>
                        <a class="btn btn-small btn-info" href="javascript:mostrarEditarCompania({{ $value->id }});"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-small btn-danger" href="javascript:eliminarCompania({{ $value->id }});"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    "use strict";
    var responsiveHelper = undefined;
    var breakpointDefinition = {
        tablet : 1024,
        phone : 480
    };
    var tableElement = $('#companiasTbl');
    tableElement.dataTable({
        autoWidth : false,
        preDrawCallback : function() {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper) {
                responsiveHelper = new ResponsiveDatatablesHelper(tableElement, breakpointDefinition);
            }
        },
        rowCallback : function(nRow) {
            responsiveHelper.createExpandIcon(nRow);
        },
        drawCallback : function(oSettings) {
            responsiveHelper.respond();
        }
    });

    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Compañias")').parent().addClass("active"); 
</script>
