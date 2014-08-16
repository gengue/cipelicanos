<div class="container-fluid">
<<<<<<< HEAD
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Usuario <small>Mostrar Usuario</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirUsuarios();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>

    <div class="jumbotron text-center">
        <h2>{{ $usuario->nombre }}</h2>
        <p>
            <strong>Tipo Usuario:</strong> {{ $usuarios->tipo_usuario }}<br>
            <strong>Nombres:</strong> {{ $usuarios->nombre }}<br>
            <strong>Apellidos:</strong> {{ $usuarios->apellido }}<br>
            <strong>Telefono:</strong> {{ $usuarios->telefono }}<br>
        </p>
    </div>
=======

<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('proveedores') }}">Ver todas los proveedores</a></li>
		<li><a href="{{ URL::to('proveedores/create') }}">Crear proveedor</a>
	</ul>
</nav>

<h1>Detalle de {{ $proveedor->nombre }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $proveedor->nombre }}</h2>
		<p>
			<strong>Nombre de Contacto:</strong> {{ $proveedor->nombre_contacto }}<br>
			<strong>Telefono:</strong> {{ $proveedor->telefono }}
			<strong>Direccion:</strong> {{ $proveedor->direccion }}
			<strong>Email:</strong> {{ $proveedor->correo }}
		</p>
	</div>
>>>>>>> 19fe4703a942918e026c954f1c83e7af2d85d76e

</div>