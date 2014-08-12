<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{ HTML::style('css/bootstrap.css'); }}
    </head>
    <body>

        <div class="container-fluid">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('pedidos') }}">Nerd Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('pedidos') }}">View All</a></li>
                    <li><a href="{{ URL::to('pedidos/create') }}">Create</a>
                </ul>
            </nav>

            <h1>Create</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('url' => 'pedidos', 'id' => 'form')) }}

            <div class="form-group">
                {{ Form::label('producto_id', 'Producto') }}
                {{ Form::select('producto_id', $productos, null, array('class'=>'form-control','style'=>'' )) }}
            </div>

            <div class="form-group">
                {{ Form::label('proveedor_id', 'Proveedor') }}
                {{ Form::select('proveedor_id', $proveedores, null, array('class'=>'form-control','style'=>'' )) }}
            </div>
            <div class="form-group">
                {{ Form::label('naviera_id', 'Naviera') }}
                {{ Form::select('naviera_id', $navieras, null, array('class'=>'form-control','style'=>'' )) }}
            </div>
            <div class="form-group">
                {{ Form::label('container_id', 'Containers') }}
                {{ Form::select('containers[]', $container, null, array('multiple' => true,  'class'=>'form-control')); }}
            </div>
            <div class="form-group">
                {{ Form::label('guia_id', 'Guia') }}
                {{ Form::select('guia_id', $guias, null, array('class'=>'form-control','style'=>'' )) }}

                <!-- Button trigger modal -->
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Agregar
                </button>
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
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
            <!-- jQuery Version 1.11.0 -->
    {{ HTML::script('js/jquery-1.11.0.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}

<script>
    
$("#form").submit(function( e ) {
    e.preventDefault();
  alert( "Handler for .submit() called." );
});

</script>