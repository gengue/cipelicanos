<div class="container-fluid">

    <nav class="navbar navbar-inverse">                
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('guias') }}">Ver todas las gu&iacute;as</a></li>
            <li><a href="{{ URL::to('guias/create') }}">Crear Gu&iacute;a</a>
        </ul>
    </nav>

    <h1>Crear una gu&iacute;a</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'guias',
                        'files' => true
                        )) 
    }}

    <div class="form-group">
        {{ Form::label('numero_guia', 'Numero de gu&iacute;a') }}
        {{ Form::text('numero_guia', Input::old('numero de gu&iacute;a'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('empresa_envio', 'Empresa de env&iacute;o') }}
        {{ Form::text('empresa_envio', Input::old('ejemplo: Fedex'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('url_archivo', 'Documento adjunto') }}
        {{ Form::file('url_archivo') }}
    </div>

    {{ Form::submit('Crear Guia!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>