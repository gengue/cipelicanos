<div class="container-fluid">

    <nav class="navbar navbar-inverse">

        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('navieras') }}">Ver todas las navieras</a></li>
            <li><a href="{{ URL::to('navieras/create') }}">Crear naviera</a>
        </ul>
    </nav>

    <h1>Showing {{ $naviera->nombre }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $naviera->nombre }}</h2>
        <p>
            <strong>Nombre de Contacto:</strong> {{ $naviera->nombre_contacto }}<br>
            <strong>Telefono:</strong> {{ $naviera->telefono }}
            <strong>Direccion:</strong> {{ $naviera->direccion }}
        </p>
    </div>

</div>