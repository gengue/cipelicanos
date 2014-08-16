@extends ('layout/layout')

@section ('title') Registro de Usuarios @stop

@section ('content')

<h1>Crear Usuarios</h1>

{{ Form::open(array( 'method' => 'POST'), array('role' => 'form')) }}

<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('email', 'Dirección de E-mail') }}
        {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
    </div>  
    <div class="form-group col-md-4">
        {{ Form::label('full_name', 'Nombre completo') }}
        {{ Form::text('full_name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('compania', 'Compañia') }}
        {{ Form::text('compania', null, array('placeholder' => '', 'class' => 'form-control')) }}        
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
    </div>
</div>
{{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    

{{ Form::close() }}

@stop