<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-university"></i> Compa&ntilde;ias <small>Editar una compa&ntilde;ia</small></h1>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirNavieras();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>

    {{ Form::model($compania, array('route' => array('companias.update',
            $compania->id), 
            'id' => 'formEditarCompania',
            'method' => 'PUT'))
    }}

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('nit', 'NIT') }}
        {{ Form::text('nit', Input::old('nit'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('telefono', 'Telefono') }}
        {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('correo', 'Correo') }}
        {{ Form::text('correo', Input::old('correo'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('usuario_id', 'Usuario') }}
        {{ Form::select('usuario_id', $usuarios, $compania->usuario_id, array('class'=>'form-control','style'=>'' )) }}
    </div>
    <a class="btn btn-small btn-danger" href="javascript:abrirNavieras();">Cancelar</a>
    {{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>

<script>

    $("#formEditarCompania").submit(function(e) {
        e.preventDefault();       
        var datos = $("#formEditarCompania").serialize();
        editarCompania(datos, {{ $compania->id }});
    });

</script>