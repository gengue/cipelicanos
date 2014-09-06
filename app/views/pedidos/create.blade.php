<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Pedidos <small>Agregar pedido</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirPedidos();"><i class="fa fa-plus"></i> Listar todos</a>
    <br><br>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('id' => 'formPedidos',
                'files' => true)) }}

    <div class="form-group">
        {{ Form::label('compania', 'Compañia') }}
        {{ Form::select('compania_id', $companias, null, array('class'=>'form-control','style'=>'' )) }}
    </div>

    <div class="form-group">
        {{ Form::label('proveedor_id', 'Proveedor') }}
        {{ Form::select('proveedor_id', $proveedores, null, array('class'=>'form-control','style'=>'' )) }}
    </div>

    <div class="form-group">
        {{ Form::label('producto_id', 'Producto') }}
        {{ Form::select('producto_id', $productos, null, array('class'=>'form-control','style'=>'' )) }}
    </div>

    <div class="form-group">
        {{ Form::label('naviera_id', 'Naviera') }}
        {{ Form::select('naviera_id', $navieras, null, array('class'=>'form-control','style'=>'' )) }}
    </div>
    <div class="form-group">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Containers</h3>
            </div>
            <!-- <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <strong>ey!</strong> Aca puedes agregar, editar o eliminar los containers correspondientes a este pedido!.
                        </div>-->
            <ul id="ulContainers" class="list-group">
            </ul>
            <div class="panel-footer">
                <a id="aContainers" href="javascript:agregarContainer();" class="btn btn-primary btn-sm" role="button">Agregar Container</a>
            </div>
        </div>
    </div>
    {{ Form::hidden('containers', '', array('id' => 'id_containers')) }}

    <div class="form-group">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Guia</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    {{ Form::label('numero_guia', 'Numero de guia') }}
                    {{ Form::text('numero_guia', Input::old('numero de guia'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('empresa_envio', 'Empresa de envio') }}
                    {{ Form::text('empresa_envio', Input::old('ejemplo: Fedex'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('url_archivo', 'Documento adjunto') }}
                    {{ Form::file('url_archivo') }}
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('numero_reserva', 'Numero de Reserva') }}
        {{ Form::text('numero_reserva', Input::old('eje: 129XC83'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('buque', 'Buque') }}
        {{ Form::text('buque', Input::old('eje: El condor Herido'), array('class' => 'form-control')) }}
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('fecha_carga', 'Fecha de Carga') }}

                {{ Form::date('fecha_carga', null, array('class'=>'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('fecha_abordaje', 'Fecha de Abordaje') }}

                {{ Form::date('fecha_abordaje', null, array('class'=>'form-control')) }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('fecha_entrega', 'Fecha de Entrega') }}

                {{ Form::date('fecha_entrega', null, array('class'=>'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('fecha_vencimiento', 'Fecha de Vencimiento') }}

                {{ Form::date('fecha_vencimiento', null, array('class'=>'form-control')) }}
            </div>
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('importe_facturado', 'Importe Facturado') }}

        {{ Form::text('importe_facturado', null, array('class'=>'form-control')) }}
    </div>


    {{ Form::submit('Crear Pedido!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

<!-- Modal de containers -->
<div class="modal fade" id="modalContainer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Container</h4>
            </div>
            <div class="modal-body">

                {{ Form::open(array('id' => 'formContainer')) }}
                {{Form::hidden('id','',array('id'=>'id'))}}
                <div class="form-group">
                    {{ Form::label('numero_container', 'Numero de Container') }}
                    {{ Form::text('numero_container', Input::old('nombre'), array('class' => 'form-control')) }}
                </div>
                {{ Form::submit('Crear container!', array('class' => 'btn btn-primary', 'id'=>'btnsubmit')) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!-- FIN Modal-->
</body>
</html>
<script>
    var containers = [];
    
    $("#formPedidos").submit(function(e) {
        e.preventDefault();
        $("#id_containers").val(containers);
        var datos = $("#formPedidos").serialize();
        console.log(datos);
        crearPedido(datos);
    });

    $("#proveedor_id").on('change', function(ev) {
        cargarProductos($(this).val());
    });

    $("#formContainer").submit(function(e) {
        e.preventDefault();
        var id = $('#id').val();
        if (id) {
            var datos = $('input:text[name=numero_container]').val();
            $('input:text[name=numero_container]').val('');
            containers[id] = datos;
            $('#id').val('');
            $('#modalContainer').modal('hide');
            actualizarContainers();
            alert('Editado!');
        } else {
            var datos = $('input:text[name=numero_container]').val();
            $('input:text[name=numero_container]').val('');
            containers.push(datos);
            $('#modalContainer').modal('hide');
            actualizarContainers();
            alert('Agregado!');
        }
    });
    function agregarContainer() {
        $('#btnsubmit').val('Crear container!');
        $('#modalContainer').modal();
    }
    function editarContainer(id) {
        $('#id').val(id);
        $('#btnsubmit').val('Editar');
        $('input:text[name=numero_container]').val(containers[id]);
        $('#modalContainer').modal();
    }
    function eliminarContainer(id) {
        containers.splice(id, 1);
        actualizarContainers();

    }
    function actualizarContainers() {
        $("#ulContainers").html("");
        for (var i = 0; i < containers.length; i++) {
            $("#ulContainers").append('<li class="list-group-item">' + containers[i] + ' <a href="javascript:editarContainer(' + i + ')">Editar </a><a href="javascript:eliminarContainer(' + i + ')">Borrar</a></li>');
        }
    }
</script>
