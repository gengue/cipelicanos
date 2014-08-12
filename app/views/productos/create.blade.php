
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Dashboard <small>Administrador</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('productos') }}">Ver todos los productos</a></li>
            <li><a href="{{ URL::to('productos/create') }}">Crear un producto</a>
        </ul>
    </nav>

    <h1>Crear un producto</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'productos')) }}

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('descripcion', 'Descripcion') }}
        {{ Form::text('descripcion', Input::old('Descripcion'), array('class' => 'form-control')) }}
    </div>          
    <div class="form-group">
        {{ Form::label('proveedor', 'Proveedor') }}
        {{ Form::select('proveedor', $proveedores, Input::old('Selecciona uno'), array('class' => 'form-control')) }}
    </div>	

    {{ Form::submit('Crear Producto!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
