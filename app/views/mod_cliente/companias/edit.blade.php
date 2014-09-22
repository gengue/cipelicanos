<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-university"></i> Compa&ntilde;ias <small>Editar una compa&ntilde;ia</small></h1>
            </h1>
           
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirCompanias();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>

    {{ Form::model($compania, array('route' => array('companias.update',
            $compania->id), 
            'id' => 'formEditarCompania',
            'method' => 'PUT'))
    }}

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('nombre', 'Nombre de la compañía') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('nit', 'NIT de la compañía') }}
            {{ Form::text('nit', Input::old('nit'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{ Form::label('telefono', 'Telefono de la compañía') }}
            {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('correo', 'Correo electrónico') }}
            {{ Form::text('correo', Input::old('correo'), array('class' => 'form-control')) }}
        </div>
    </div>
    <br/>
    <a class="btn btn-small btn-danger" href="javascript:abrirCompanias();">Cancelar</a>
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