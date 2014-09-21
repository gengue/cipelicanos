<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-users"></i> Usuarios <small>Todos los usuarios</small>
            </h1>
            
        </div>
    </div>

    <a class="btn btn-small btn-info" onClick="javascript:abrirUsuarios();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" onClick="javascript:mostrarCrearUsuario();"><i class="fa fa-plus"></i> Agregar usuario</a>
    <br><br>
    <div class="table-responsive">
        <table id="usuariosTbl" class="table condensed table-striped table-bordered">
            <thead>
                <tr>
                    <td data-hide="phone,tablet">ID</td>
                    <td data-hide="phone,tablet">Tipo</td>
                    <td data-class="expand">Nombre</td>
                    <td data-hide="phone,tablet">Telefono</td>
                    <td>Correo</td>
                    <td data-hide="phone,tablet">Direccion</td>
                    <td data-hide="phone,tablet">Pais</td>
                    <td data-hide="phone">Ciudad</td>
                    <td data-hide="phone,tablet">Estado</td>
                    <td data-hide="phone">Opciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->tipo_usuario }}</td>
                    <td>{{ $value->nombre }} {{ $value->apellido }}</td>
                    <td>{{ $value->telefono }}</td>
                    <td>{{ $value->correo }}</td>
                    <td>{{ $value->direccion }}</td>
                    <td>{{ $value->pais->nombre }}</td>
                    <td>{{ $value->ciudad->nombre }}</td>
                    <td>{{ $value->estado }}</td>
                    <td>                            

                        <a class="btn btn-small btn-success" onClick= "javascript:mostrarDetalleUsuarios({{$value->id}});" title="Ver Detalles"><i class="fa fa-search" ></i></a>
                        <a class="btn btn-small btn-info" onClick="javascript:mostrarEditarUsuarios({{ $value->id}});" title="Modificar" ><i class="fa fa-pencil" ></i></a>
                        <a class="btn btn-small btn-danger" data-toggle="confirmation" data-href="javascript:eliminarUsuarios({{ $value->id }});" href="javascript:eliminarUsuarios({{ $value->id }});" title="Eliminar"><i class="fa fa-trash-o" ></i></a>

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
    var tableElement = $('#usuariosTbl');
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
    $('#menu-vertical').find('a:contains("Usuarios")').parent().addClass("active");
</script>