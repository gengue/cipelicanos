<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Compañias <small>Mostrar Compañias</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirCompanias();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>
    <div class="jumbotron text-center">
        <h2>{{ $companias->nombre }}</h2>
        <p>
            <strong>Nit:</strong> {{ $companias->nit }}<br>
            <strong>Telefono:</strong> {{ $companias->telefono }}
            <strong>Correo:</strong> {{ $companias->correo }}
            <strong>Direccion:</strong> {{ $companias->direccion }}
            <strong>Usuario:</strong> {{ $companias->usuario_id}}
        </p>
    </div>

</div>