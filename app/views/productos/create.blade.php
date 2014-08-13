
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Productos <small>Agregar un producto</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:
                </li>
            </ol>
        </div>
    </div>
    <a class="btn btn-small btn-info" href="javascript:abrirProductos();"><i class="fa fa-list"></i> Listar todos</a>
    <br><br>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('', 'id' => 'formProducto')) }}

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

<script>

    $("#formProducto").submit(function(e) {
        e.preventDefault();
        
        var datos = {
            nombre: $("#nombre").val(),
            descripcion: $("#descripcion").val(),
            proveedor: $("#proveedor").val(),
            token: $("input[name=_token]").val()
        };
        crearProducto(datos);
    });

</script>Ï
