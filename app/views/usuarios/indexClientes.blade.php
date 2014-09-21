<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-money"></i> Clientes <small>Todos los clientes</small>
            </h1>
  
    </div>
    </div>

    <div class='table-responsive'>
        <table id="clientesTbl" class="table table-striped table-condensed table-bordered table-hover">
            <thead>
                <tr>
                    <td data-class="expand">Nombre</td>
                    <td data-hide="phone, tablet">Telefono</td>
                    <td>Correo</td>
                    <td data-hide="phone,tablet">Direccion</td>
                    <td data-hide="phone,tablet">Pais</td>
                    <td data-hide="phone">Ciudad</td>
                    <td data-hide="phone">Opciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $key => $value)
                 @if($value->estado == 'ACTIVO')
	                <tr>
	                    <td>{{ $value->nombre }} {{ $value->apellido }}</td>
	                    <td>{{ $value->telefono }}</td>
	                    <td>{{ $value->correo }}</td>
	                    <td>{{ $value->direccion }}</td>
	                    <td>{{ $value->pais->nombre }}</td>
	                    <td>{{ $value->ciudad->nombre }}</td>
	
	                    <td>                            
	                        <a class="btn btn-small btn-success" onClick="javascript:mostrarDetalleCliente({{ $value->id }});"><i class="fa fa-search"></i></a>
	                        <a class="btn btn-small btn-danger" data-toggle="confirmation" data-href="javascript:eliminarCliente({{ $value->id }});" href="javascript:eliminarCliente({{ $value->id }});"><i class="fa fa-trash-o"></i></a>
	
	                    </td>
	                </tr>
	               @endif
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
        phone : 480
    };
    var tableElement = $('#clientesTbl');
    tableElement.dataTable({
        autoWidth        : false,
        preDrawCallback: function () {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper) {
                responsiveHelper = new ResponsiveDatatablesHelper(tableElement, breakpointDefinition);
            }
        },
        rowCallback    : function (nRow) {
            responsiveHelper.createExpandIcon(nRow);
        },
        drawCallback   : function (oSettings) {
            responsiveHelper.respond();
        }
    });
    
    $('#menu-vertical li').removeClass();
    $('#menu-vertical').find('a:contains("Clientes")').parent().addClass("active");
</script>