<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Navieras <small>Mostrar Navieras</small>
            </h1>
            
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirNavieras();"><i class="fa fa-arrow-left"></i> Atras</a>
    <br><br>

    <div class="jumbotron text-center">
        <h2>{{ $naviera->nombre }}</h2>
        <p>
            <strong>Nombre de Contacto:</strong> {{ $naviera->nombre_contacto }}<br>
            <strong>Telefono:</strong> {{ $naviera->email }}<br>
            <strong>Telefono:</strong> {{ $naviera->telefono }}<br>
            <strong>Direccion:</strong> {{ $naviera->direccion }}<br>
            <strong>Url Seguimiento:</strong> {{ $naviera->url_seguimiento }}<br>
        </p>
    </div>

</div>