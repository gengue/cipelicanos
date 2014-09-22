<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Navieras <small>Agregar naviera</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirNavieras();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>

    {{ Form::open(array('url' => 'navieras', 'id' => 'formNaviera')) }}

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('nombre', 'Nombre de la naviera') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('nombre_contacto', 'Nombre del cont&aacute;cto') }}
            {{ Form::text('nombre_contacto', Input::old('nombre de contacto'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('email', 'E-mail del cont&aacute;cto') }}
            {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('telefono', 'Tel&eacute;fono del contacto') }}
            {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('direccion', 'Direcci&oacute;n de la naviera') }}
            {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
        </div>    
        <div class="col-md-6">
            {{ Form::label('url_seguimiento', 'Url del Tracking') }}
            {{ Form::text('url_seguimiento', Input::old('url_seguimiento'), array('class' => 'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        {{ Form::label('url_seguimiento', 'Url Seguimiento') }}
        {{ Form::text('url_seguimiento', Input::old('url_seguimiento'), array('class' => 'form-control')) }}
    </div>
    <a class="btn btn-small btn-danger" href="javascript:abrirNavieras();">Cancelar</a>
    {{ Form::submit('Crear naviera!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
<script>

    $("#formNaviera").submit(function(e) {
        e.preventDefault();
        
        var datos =  $("#formNaviera").serialize();
        crearNaviera(datos);
    });

</script>