<div class="container-fluid">

    <nav class="navbar navbar-inverse">

        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('guias') }}">Ver todas las guias</a></li>
            <li><a href="{{ URL::to('guias/create') }}">Crear una guia</a>
        </ul>
    </nav>

    <h1>Editar guia {{ $guia->numero_guia }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($guia, array('route' => array('guias.update', $guia->id),
                        'files' => true,
                        'method' => 'PUT'
                        ))                    
    }}

    <div class="form-group">
        {{ Form::label('numero_guia', 'Numero de guia') }}
        {{ Form::text('numero_guia', Input::old('numero de guia'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('empresa_envio', 'Empresa de envio') }}
        {{ Form::text('empresa_envio', Input::old('ejemplo: Fedex'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('url_archivo', 'Documento adjunto') }}
        {{ Form::file('url_archivo') }}
    </div>

    {{ Form::submit('Editar guia!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>