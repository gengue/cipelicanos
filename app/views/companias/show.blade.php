<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Compañias <small>Mostrar Compañias</small>
            </h1>
           
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirNavieras();"><i class="fa fa-arrow-left"></i> Atras</a>

    <br><br>
    <div class="jumbotron text-center">
        <h2>{{ $companias->nombre }}</h2>
        <p>
            <strong>Nit:</strong> {{ $companias->nit }}<br>
            <strong>Telefono:</strong> {{ $companias->telefono }}
            <strong>Correo:</strong> {{ $companias->correo }}
            <strong>Direccion:</strong> {{ $companias->direccion }}
            <strong>Usuario:</strong> {{ $companias->cliente->nombre." ".$companias->cliente->apellido }}
        </p>
    </div>

</div>