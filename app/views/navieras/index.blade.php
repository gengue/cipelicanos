<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-fw fa-anchor"></i> Navieras <small>Todas las navieras</small></h1>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirNavieras();"><i class="fa fa-list"></i> Listar todos</a>
    <a class="btn btn-small btn-info" href="javascript:mostrarCrearNaviera();"><i class="fa fa-plus"></i> Agregar naviera</a>

    <br>
    <br>
    
    <div class="table-responsive">
        <table id="navierasTbl" class="table table-condensed table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <td data-class="expand">Nombre</td>
                    <td>Nombre de Contacto</td>
                    <td data-hide="phone">Email</td>
                    <td data-hide="phone">Telefono</td>
                    <td data-hide="phone,tablet">Direccion</td>
                    <td data-hide="phone,tablet, pc">URL Tracking</td>
                    <td data-hide="phone">Opciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($navieras as $key => $value)
                <tr>
                    <td>{{ $value->nombre }}</td>
                    <td>{{ $value->nombre_contacto }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->telefono }}</td>
                    <td>{{ $value->direccion }}</td>
                    <td valign="top"> {{ $value->url_seguimiento }}</td>

                    <td>
                        <a class="btn btn-small btn-success" href="javascript:mostrarDetalleNaviera({{ $value->id }});"><i class="fa fa-search"></i></a>
                        <a class="btn btn-small btn-info" href="javascript:mostrarEditarNaviera({{ $value->id }});"><i class="fa fa-pencil"></i>
                        </a><a class="btn btn-small btn-danger" data-toggle="confirmation" data-href="javascript:eliminarNaviera({{ $value->id }});" href="javascript:eliminarNaviera({{ $value->id }});"><i class="fa fa-trash-o"></i></a>
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
		pc: 1444,
		tablet : 1024,
		phone : 480
	};
	var tableElement = $('#navierasTbl');
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
	$('#menu-vertical').find('a:contains("Navieras")').parent().addClass("active"); 
</script>