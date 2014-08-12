<div class="container-fluid">

            <nav class="navbar navbar-inverse">

                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('usuarios') }}">Ver todos</a></li>
                    <li><a href="{{ URL::to('usuarios/create') }}">Crear</a>
                </ul>
            </nav>

            <h1>Crear</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('url' => 'usuarios')) }}

            <div class="form-group">
                {{ Form::label('tipo_usuario', 'Tipo de Usuario') }}
                {{ Form::select('tipo_usuario', array('ADMINISTRADOR' => 'Administrador', 'CLIENTE' => 'Cliente', 'DIGITADOR' => 'Digitador'), null, array('class'=>'form-control','style'=>'' )) }}
            </div>
            <div class="form-group">
                {{ Form::label('correo', 'Email') }}
                {{ Form::text('correo', Input::old('ejemplo@dominio.com'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Contraseña') }}
                {{ Form::text('password', Input::old(''), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('nombre', 'Nombre') }}
                {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('apellido', 'Apellidos') }}
                {{ Form::text('apellido', Input::old(''), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('telefono', 'Telefono') }}
                {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('direccion', 'Direccion') }}
                {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('pais', 'Pais') }}
                {{ Form::select('pais', array('COL' => 'Colombia'), null, array('class'=>'form-control','style'=>'' )) }}
            </div>
            <div class="form-group">
                {{ Form::label('ciudad', 'Ciudad') }}
                {{ Form::select('ciudad', array('CHV' => 'Chivolo'), null, array('class'=>'form-control','style'=>'' )) }}
            </div>
            {{ Form::submit('Crear Usuario!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>