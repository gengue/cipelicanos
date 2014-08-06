<!DOCTYPE html>
<html>
    <head>
        <title>C.I Pelicamos admin - Guias</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">                
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('guias') }}">Ver todas las guias</a></li>
                    <li><a href="{{ URL::to('guias/create') }}">Crear Guia</a>
                </ul>
            </nav>

            <h1>Crear una guia</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('url' => 'guias',
                        'files' => true
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

            {{ Form::submit('Crear Guia!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>