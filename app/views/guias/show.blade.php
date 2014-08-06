<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>C.I Pelicanos Admin - Guias</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">

                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('guias') }}">Ver todas las guias</a></li>
                    <li><a href="{{ URL::to('guias/create') }}">Crear una guia</a>
                </ul>
            </nav>


            <h1>Detalle de guia {{ $guia->numero_guia }}</h1>

            <div class="jumbotron text-center">
                <h2>{{ $guia->numero_guia }}</h2>
                <p>
                    <strong>Empresa de envios:</strong> {{ $guia->empresa_envio }}<br>
                    <strong>Documento adjunto:</strong> 
                    <embed src="{{ URL::asset($guia->url_archivo) }}" width=”500″ height=”375″>                    
                </p>
            </div>

        </div>
    </body>
</html>