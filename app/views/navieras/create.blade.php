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

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('nombre_contacto', 'Nombre de Contacto') }}
        {{ Form::text('nombre_contacto', Input::old('nombre de contacto'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('telefono', 'Telefono') }}
        {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('direccion', 'Direccion') }}
        {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
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