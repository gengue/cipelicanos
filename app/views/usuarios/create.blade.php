<div class="container-fluid">

            <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuarios <small>Agregar usuario</small>
            </h1>
            
        </div>
    </div>

    <a class="btn btn-small btn-info" onClick="javascript:abrirUsuarios();"><i class="fa fa-arrow-left"></i> Atras</a>
   <br><br>
          
            {{ Form::open(array('url' => 'usuarios','id' => 'formUsuarios')) }}


            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('tipo_usuario', 'Tipo de Usuario') }}
                    {{ Form::select('tipo_usuario', array('ADMINISTRADOR' => 'Administrador', 'CLIENTE' => 'Cliente', 'DIGITADOR' => 'Digitador'), null, array('class'=>'form-control','style'=>'' )) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('correo', 'Email') }}
                    {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('nombre', 'Nombre') }}
                    {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('apellido', 'Apellidos') }}
                    {{ Form::text('apellido', Input::old(''), array('class' => 'form-control')) }}
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('password', 'Contraseña') }}
                    {{ Form::text('password', Input::old(''), array('class' => 'form-control')) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('telefono', 'Telefono') }}
                    {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('pais', 'Pais') }}
                    {{ Form::select('pais', $paises, null, array('class'=>'form-control','style'=>'' )) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('ciudad', 'Ciudad') }}
                    {{ Form::select('ciudad', array(), null, array('class'=>'form-control','style'=>'' )) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('direccion', 'Direccion') }}
                {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
            </div>
            <a class="btn btn-small btn-danger" onClick="javascript:abrirUsuarios();">Cancelar</a>
            {{ Form::submit('Crear Usuario!', array('class' => 'btn btn-primary')) }}
            
            {{ Form::close() }}

        </div>
<script>

    $("#formUsuarios").submit(function(e) {
        e.preventDefault();
        
        var datos =  $("#formUsuarios").serialize();
        crearUsuarios(datos);
    });
    
    $("#pais").on('change', function(ev) {
        cargarCiudades($(this).val());
     });

</script>
