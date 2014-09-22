<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Pedidos <small>Agregar pedido</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirPedidos();"><i class="fa fa-arrow-left"></i> Atr&aacute;s</a>
    <br><br>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('id' => 'formPedidos',
                'files' => true, 'url'=> '/pedidos')) }}

    <div class="form-group">
        <div class="col-lg-6">

            {{ Form::label('compania', 'Compa&ntilde;&iacute;a que realiza el pedido') }}
            {{ Form::select('compania_id', $companias, null, array('class'=>'form-control','style'=>'' )) }}
            
            {{ Form::label('proveedor_id', 'Proveedor del producto') }}
            {{ Form::select('proveedor_id', $proveedores, null, array('class'=>'form-control','style'=>'' )) }}

        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-6">
            {{ Form::label('producto_id', 'Producto') }}
            {{ Form::select('producto_id', $productos, null, array('class'=>'form-control')) }}


            {{ Form::label('naviera_id', 'Naviera contratada') }}
            {{ Form::select('naviera_id', $navieras, null, array('class'=>'form-control','style'=>'' )) }}

        </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/>

    <div class="form-group">        
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Containers del pedido</h3>
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
    {{ Form::hidden('containers', '', array('id' => 'id_containers'))}}

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('numero_reserva', 'N&uacute;mero de reserva') }}
            {{ Form::text('numero_reserva', Input::old('eje: 129XC83'), array('class' => 'form-control')) }}
           
        </div>
        <div class="row">
            <div class="col-md-5">
            {{ Form::label('tipo', 'Tipo de pedido') }}
            {{ Form::select('tipo', array(''=>'', 'EXPORTE'=>'Exportacion', 'IMPORTE'=>'Importacion'), null, array('class'=>'form-control','style'=>'' )) }}      
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
    <div class="form-group">
        {{ Form::label('buque', 'Buque de transporte') }}
        {{ Form::text('buque', Input::old('eje: El condor Herido'), array('class' => 'form-control')) }}
    </div>
        </div>
        
        <div class="col-md-4">
         {{ Form::label('numero_viaje', 'N&uacute;mero de viaje') }}
        {{ Form::text('numero_viaje', Input::old('numero_viaje'), array('class' => 'form-control')) }}   
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
             {{ Form::label('fecha_carga', 'Fecha de carga') }}
             <div class="input-group date" id="datepicker1">  
              {{ Form::text('fecha_carga', null, array('class'=>'form-control', 'data-date-format'=>'YYYY-MM-DD')) }}
                <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                </span>
            </div>
            {{ Form::label('fecha_abordaje', 'Fecha de abordaje') }}
            <div class="input-group date" id="datepicker2">
                 {{ Form::text('fecha_abordaje', null, array('class'=>'form-control', 'data-date-format'=>'YYYY-MM-DD')) }}                <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                </span>
            </div>
        </div>
        <div class="col-md-6">
            {{ Form::label('fecha_entrega', 'Fecha de entrega') }}
            <div class="input-group date" id="datepicker3">
                 {{ Form::text('fecha_entrega', null, array('class'=>'form-control', 'data-date-format'=>'YYYY-MM-DD')) }}
                <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                </span>
            </div>
            
        </div>
    </div>

    <br/>
    <div class="form-group">        
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Gu&iacute;as de los documentos</h3>
            </div>
            <!-- <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <strong>ey!</strong> Aca puedes agregar, editar o eliminar los containers correspondientes a este pedido!.
                        </div>-->
            <ul id="ulGuias" class="list-group">
            </ul>
            <div class="panel-footer">
                <a id="aGuias" href="javascript:agregarGuia();" class="btn btn-primary btn-sm" role="button">Agregar Guia</a>
            </div>
        
    </div>
    </div>

    <div class="form-group">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Otros documetos</h3>
            </div>
            <div id="dropzone" class="dropzone"></div>
        </div>
    </div>


    <a class="btn btn-small btn-danger" href="javascript:abrirPedidos();">Cancelar</a>
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
                    {{ Form::label('numero_container', 'N&uacute;mero de container') }}
                    {{ Form::text('numero_container', Input::old('nombre'), array('class' => 'form-control')) }}
                </div>
                {{ Form::submit('Crear container!', array('class' => 'btn btn-primary', 'id'=>'btnsubmit')) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!-- FIN Modal-->
<!-- Modal de guia -->
<div class="modal fade" id="modalGuia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Crear Guia</h4>
            </div>
            <div class="modal-body">

                {{ Form::open(array('id' => 'formGuia', 'files' => true, 'url'=>'/guias')) }}
                {{Form::hidden('id','',array('id'=>'idGuia'))}}
                <div class="form-group">
                    {{ Form::label('numero_guia', 'Numero de gu&iacute;a') }}
                    {{ Form::text('numero_guia', Input::old('numero de guia'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('empresa_envio', 'Empresa de env&iacute;o') }}
                    {{ Form::text('empresa_envio', Input::old('ejemplo: Fedex'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('url_archivo', 'Documento adjunto') }}
                    {{ Form::file('url_archivo') }}
                </div>
                {{ Form::submit('Crear Guia!', array('class' => 'btn btn-primary', 'id'=>'btnsubmit')) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!-- FIN Modal-->
</body>
</html>

<script>
    $('#datepicker1').datetimepicker({ pickTime: false });
    $('#datepicker2').datetimepicker({ pickTime: false });
    $('#datepicker3').datetimepicker({ pickTime: false });
    $('#datepicker4').datetimepicker({ pickTime: false });
    
    var pedidosid = null;
</script>

<script src="js/pedidos.js"></script>

