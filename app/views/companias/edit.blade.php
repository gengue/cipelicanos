<div class="container-fluid">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('companias') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('companias') }}">View All Nerds</a></li>
            <li><a href="{{ URL::to('companias/create') }}">Create a Nerd</a>
        </ul>
    </nav>

    <h1>Edit {{ $companias->name }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($companias, array('route' => array('companias.update', $companias->id), 'method' => 'PUT')) }}

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
        {{ Form::select('usuario_id', $usuarios, $companias->usuario_id, array('class'=>'form-control','style'=>'' )) }}
    </div>
    {{ Form::submit('Edit!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>