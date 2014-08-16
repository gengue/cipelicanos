<div class="container-fluid">

    <nav class="navbar navbar-inverse">

        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('companias') }}">Ver todas las navieras</a></li>
            <li><a href="{{ URL::to('companias/create') }}">Crear companias</a>
        </ul>
    </nav>

    <h1>Showing {{ $companias->nombre }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $companias->nombre }}</h2>
        <p>
            <strong>Nit:</strong> {{ $companias->nit }}<br>
            <strong>Telefono:</strong> {{ $companias->telefono }}
            <strong>Correo:</strong> {{ $companias->correo }}
            <strong>Usuario:</strong> {{ $companias->usuario_id }}
        </p>
    </div>

</div>