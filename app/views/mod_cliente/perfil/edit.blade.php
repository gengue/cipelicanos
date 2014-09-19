
        
<div class="container">
      
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-users"></i> Peril de Usuario <small>Modificar datos </small>
            </h1>
           
        </div>
    </div>
    
    <div class="row">   
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">{{ ' '.Auth::user()->nombre;}}{{ ' '.Auth::user()->apellido;}}</h3>
            </div>
            <div class="panel-body">
            
  <a class="btn btn-small btn-info" href="javascript:abrirPerfil();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>

    {{ Form::model($perfil, array('route' => array('usuarios.update',
            $perfil->id), 
            'id' => 'formEditarPerfil',
            'method' => 'PUT'))
    }}
  
    <div class="form-group">
        <div class="col-lg-6">
            {{ Form::label('nombre', 'Nombre') }}
            {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
        </div>    
        <div class="col-lg-6">
            {{ Form::label('apellido', 'Apellidos') }}
            {{ Form::text('apellido', Input::old(''), array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-6">
            {{ Form::label('correo', 'Email') }}
            {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
        </div>
        <div class="col-lg-6">
            {{ Form::label('telefono', 'Telefono') }}
            {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-6">
            {{ Form::label('pais', 'Pais') }}
            {{ Form::select('pais', $paises, $perfil->pais_id, array('class'=>'form-control','style'=>'' )) }}
        </div>
        <div class="col-lg-6">
            {{ Form::label('ciudad', 'Ciudad') }}
            {{ Form::select('ciudad',$ciudades, $perfil->ciudad_id, array('class'=>'form-control','style'=>'' )) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('direccion', 'Direccion') }}
        {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
    </div>
    <a class="btn btn-small btn-danger" href="javascript:abrirPerfil();">Cancelar</a>
    {{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

  


             </div>
        </div>
      </div>
    
  <script>

    $("#formEditarPerfil").submit(function(e) {
        e.preventDefault();
        var datos = $("#formEditarPerfil").serialize();
                editarPerfil(datos, {{ $perfil -> id }});
    });
    
    $("#pais").on('change', function(ev) {
        cargarCiudades($(this).val());
    });
</script>
 