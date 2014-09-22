<div class="container-fluid">

    <nav class="navbar navbar-inverse">

        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('guias') }}">Ver todas las gu&iacute;as</a></li>
            <li><a href="{{ URL::to('guias/create') }}">Crear una gu&iacute;a</a>
        </ul>
    </nav>


    <h1>Detalle de gu&iacute;a {{ $guia->numero_guia }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $guia->numero_guia }}</h2>
        <p>
            <strong>Empresa de envios:</strong> {{ $guia->empresa_envio }}<br>
            <strong>Documento adjunto:</strong> 
            <embed src="{{ URL::asset($guia->url_archivo) }}" width=”500″ height=”375″>                    
        </p>
    </div>

</div>