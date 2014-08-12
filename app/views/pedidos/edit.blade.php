<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD Pedidos</title>
        {{ HTML::style('css/bootstrap.css') }}
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('pedidos') }}">Nerd Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('pedidos') }}">View All</a></li>
                    <li><a href="{{ URL::to('pedidos/create') }}">Create</a>
                </ul>
            </nav>

            <h1>Edit {{ $pedido->id }}</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::model($pedido, array('route' => array('pedidos.update', $pedido->id), 'method' => 'PUT')) }}

             <div class="form-group">
                {{ Form::label('producto_id', 'Producto') }}
                {{ Form::select('producto_id', $productos, $pedido->producto_id, array('class'=>'form-control','style'=>'' )) }}
            </div>

            <div class="form-group">
                {{ Form::label('proveedor_id', 'Proveedor') }}
                {{ Form::select('proveedor_id', $proveedores, $pedido->proveedor_id, array('class'=>'form-control','style'=>'' )) }}
            </div>
            <div class="form-group">
                {{ Form::label('naviera_id', 'Naviera') }}
                {{ Form::select('naviera_id', $navieras, $pedido->naviera_id, array('class'=>'form-control','style'=>'' )) }}
            </div>
            <div class="form-group">
                {{ Form::label('container_id', 'Containers') }}
                {{ Form::select('containers[]', $container, (array)$pedido->containers, array('multiple' => true,  'class'=>'form-control')); }}
            </div>
            <div class="form-group">
                {{ Form::label('guia_id', 'Guia') }}
                {{ Form::select('guia_id', $guias, $pedido->guia_id, array('class'=>'form-control','style'=>'' )) }}
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

                        {{ Form::date('fecha_carga', $pedido->fecha_carga, array('class'=>'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('fecha_abordaje', 'Fecha de Abordaje') }}

                        {{ Form::date('fecha_abordaje', $pedido->fecha_abordaje, array('class'=>'form-control')) }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('fecha_entrega', 'Fecha de Entrega') }}

                        {{ Form::date('fecha_entrega', $pedido->fecha_entrega, array('class'=>'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('fecha_vencimiento', 'Fecha de Vencimiento') }}

                        {{ Form::date('fecha_vencimiento', $pedido->fecha_vencimiento, array('class'=>'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('importe_facturado', 'Importe Facturado') }}

                {{ Form::text('importe_facturado', null, array('class'=>'form-control')) }}
            </div>

            {{ Form::submit('Edit!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>