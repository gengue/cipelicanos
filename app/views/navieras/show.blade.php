<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Navieras <small>Mostrar Navieras</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirNavieras();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>

    <div class="jumbotron text-center">
        <h2>{{ $naviera->nombre }}</h2>
        <p>
            <strong>Nombre de Contacto:</strong> {{ $naviera->nombre_contacto }}<br>
            <strong>Telefono:</strong> {{ $naviera->telefono }}<br>
            <strong>Direccion:</strong> {{ $naviera->direccion }}<br>
            <strong>URL de seguimiento:</strong> {{ $naviera->url_seguimiento}}
        </p>
    </div>

</div>