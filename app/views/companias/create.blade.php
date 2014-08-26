<div class="container-fluid">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('companias') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('companias') }}">View All</a></li>
            <li><a href="{{ URL::to('companias/create') }}">Create</a>
        </ul>
    </nav>

    <h1>Create</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'companias')) }}

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
        {{ Form::select('usuario_id', $usuarios, null, array('class'=>'form-control','style'=>'' )) }}
    </div>

    {{ Form::submit('Crear companias!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
