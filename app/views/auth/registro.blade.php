<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/plugins/login.css'); }}
        {{ HTML::style('css/pnotify.custom.min.css') }}
        {{ HTML::style('css/plugins/animate-custom.css'); }}

    </head>
    <body>
        <!-- start Login box -->

        <div class="container" id="login-block">
            <div id="form-div">

                <div class="login-box1 clearfix animated flipInX">
                    <div class="page-icon animated bounceInDown">
                        <img src="{{ asset('images/login-user-icon.png')}}" alt="User icon">
                    </div>
                    <div class="login-logo">
                        <a href="sign-up.html#"><img src="{{asset('images/login-logo.png')}}" alt="Company Logo"></a>
                    </div> 
                    <hr>
                    <div class="login-form panel-body">
                        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                        @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                        @endif
                        @if(Session::has('mensaje'))
                        <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
                        @endif
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                        {{ Form::open(array('url' => 'registro')) }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('correo', Input::old('correo'), array('class' => 'form-control', 'placeholder'=> 'ejemple@email.com')); }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Contraseña')) }}
                                    {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirme contraseña')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder'=> 'Nombres')); }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('apellido', Input::old('apellido'), array('class' => 'form-control', 'placeholder'=> 'Apellidos')); }}
                                </div>
                            </div>
                        </div
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control', 'placeholder'=> 'Telefonos')); }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control', 'placeholder'=> 'Direccion')); }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('pais', 'Pais') }}
                                        {{ Form::select('pais', $paises, null, array('class'=>'form-control','style'=>'' )) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('ciudad', 'Ciudad') }}
                                        {{ Form::select('ciudad', array(), null, array('class'=>'form-control','style'=>'' )) }}
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-login')) }}
                        {{ Form::close() }}

                        <div class="login-links"> 
                            <br>
                            <a href="{{url('login')}}">
                                Ya eres miembro? <strong>Entra</strong>
                            </a>
                        </div>      		
                    </div> 
                </div>
            </div>
        </div>

        <!-- End Login box -->
        <footer class="container">
            <p id="footer-text"><small> Copyright © 2014 <a href="#">The3BallSoft</a></small></p>
        </footer>
        {{ HTML::script('js/plugins/jquery-1.11.0.js'); }}
        {{ HTML::script('js/plugins/bootstrap.min.js'); }}
        {{ HTML::script('js/plugins/placeholder-shim.min.js'); }}
        {{ HTML::script('js/plugins/custom.js'); }}
        <script src="js/plugins/pnotify.custom.min.js"></script>
        {{ HTML::script('js/app.js'); }}
        <script>

//            $("#formPedidos").submit(function(e) {
//                e.preventDefault();
//
//                var datos = $("#formPedidos").serialize();
//                crearPedido(datos);
//            });

$("#pais").on('change', function(ev) {
    cargarCiudades($(this).val());
});

        </script>
    </body>
</html>
