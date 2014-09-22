<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-university"></i> Compa&ntilde;&iacute;as <small>Agregar una compa&ntilde;&iacute;a</small></h1>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirCompanias();"><i class="fa fa-arrow-left"></i> Atr&aacute;s</a>
    <br><br>

    {{ Form::open(array('url' => 'companias', 'id' => 'formCompania')) }}

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('nombre', 'Nombre de la compa&ntilde;&iacute;a') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('nit', 'NIT de la compa&ntilde;&iacute;a') }}
            {{ Form::text('nit', Input::old('nit'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('telefono', 'Tel&eacute;fono de la compa&ntilde;&iacute;a') }}
            {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('correo', 'E-mail de cont&aacute;cto') }}
            {{ Form::text('correo', Input::old('correo'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('direccion', 'Direcci&oacute;n de la compa&ntilde;&iacute;a') }}
            {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('usuario_id', 'Usuario representante') }}
            {{ Form::select('usuario_id', $usuarios, null, array('class'=>'form-control','style'=>'' )) }}
        </div>
    </div>
    <br/>
    <div class="form-group">
        <a class="btn btn-small btn-danger" href="javascript:abrirCompanias();">Cancelar</a>
        {{ Form::submit('Crear compa&ntilde;&iacute;a!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

</div>
<script>

    $("#formCompania").submit(function(e) {
        e.preventDefault();
        
        var datos =  $("#formCompania").serialize();
        crearCompania(datos);
    });

</script>