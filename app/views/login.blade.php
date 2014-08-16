<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/plugins/login.css'); }}
        {{ HTML::style('css/plugins/animate-custom.css'); }}

    </head>
    <body>
        <!-- start Login box -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">

                    <div class="login-box clearfix animated flipInY">
                        <div class="page-icon animated bounceInDown">
                            <img class="img-responsive" src="{{ asset('img/login-key-icon.png')}}" alt="Key icon">

                        </div>
                        <div class="login-logo">
                            <a href="index.html"><img src="{{ asset('img/login-logo.png')}} " alt="Company Logo"></a>
                        </div> 
                        <hr>
                        <div class="login-form panel-body">
                            {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                            @if(Session::has('mensaje_error'))
                            <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                            @endif
                            {{ Form::open(array('url' => '/login')) }}
                            <div class="form-group">
                                {{ Form::text('correo', Input::old('email'), array('class' => 'form-control', 'placeholder'=> 'Correo Electronico')); }}
                            </div>
                            <div class="form-group">
                                {{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'contraseña')); }}
                            </div>

                            {{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-login')) }}
                            {{ Form::close() }}

                            <div class="login-links"> 
                                <a href="pass.html">
                                    Olvido su Contraseña?
                                </a>
                                <br>
                                <a href="registro.html">
                                    Aun no es Miembro? <strong>Registro </strong>
                                </a>
                            </div>      		
                        </div> 			        	
                    </div>

                </div>
            </div>
        </div>

        <!-- End Login box -->
        <footer class="container">
            <p id="footer-text"><small> Copyright © 2014 <a href="#">The3BallSoft</a></small></p>
        </footer>

    </body>
</html>
{{ HTML::script('js/plugins/jquery-1.11.0.js'); }}
{{ HTML::script('js/plugins/bootstrap.min.js'); }}
{{ HTML::script('js/plugins/placeholder-shim.min.js'); }}
{{ HTML::script('js/plugins/custom.js'); }}


