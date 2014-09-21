<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Navieras <small>Agregar naviera</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" onClick="javascript:abrirNavieras();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>

    {{ Form::open(array('url' => 'navieras', 'id' => 'formNaviera')) }}

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('nombre', 'Nombre') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('nombre_contacto', 'Nombre de Contacto') }}
            {{ Form::text('nombre_contacto', Input::old('nombre de contacto'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('telefono', 'Telefono') }}
            {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('direccion', 'Direccion') }}
            {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
        </div>    
        <div class="col-md-6">
            {{ Form::label('url_seguimiento', 'Url Seguimiento') }}
            {{ Form::text('url_seguimiento', Input::old('url_seguimiento'), array('class' => 'form-control')) }}
        </div>
    </div>
    
    <br>
    <a class="btn btn-small btn-danger" onClick="javascript:abrirNavieras();">Cancelar</a>
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