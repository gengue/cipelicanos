<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Registro | C.I Pelicanos</title>
       {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/plugins/login.css'); }}
        {{ HTML::style('css/plugins/animate-custom.css'); }}
        {{ HTML::script('js/plugins/jquery-1.11.0.min.js'); }}  
        {{ HTML::script('js/plugins/bootstrap.min.js'); }}      
        {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}
   
     <style type="text/css">
        body{padding-top:40px;} </style>

 
</head>
<body >
    
    <div class="container " id="login-block" >

        <div class="row " >

            <div class="col-md-6 col-md-offset-3  clearfix animated flipInY"  >

                <div class="col-xs-12 col-sm-12 col-md-16 well   ">
                    <div class="page-icon animated bounceInDown ">
                        <img src="{{ asset('images/login-user-icon.png')}}" alt="User icon">
                    </div>
                    <div class="login-logo">
                        <a href="#"><img src="{{ asset('images/login-logo.png')}}" alt="Company Logo"></a>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                               {{-- Preguntamos si hay algÃºn mensaje de error y si hay lo mostramos  --}}
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
                                <div class="col-xs-6 col-md-6 form-group">

                                {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder'=> 'Ingrese Nombre')); }}
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                   {{ Form::text('apellido', Input::old('apellido'), array('class' => 'form-control', 'placeholder'=> 'Ingrese Apellido')); }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">

                                {{ Form::text('correo', Input::old('correo'), array('class' => 'form-control', 'placeholder'=> 'Ingrese Correo Electronico')); }}
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                   {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder'=> 'Ingrese un Nombre de Usuario ')); }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">
                                    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Ingrese su Contraseña')) }}
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                    {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirme contraseña')) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-6 form-group">
                                    {{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control', 'placeholder'=> 'Ingrese su Telefono')); }}
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                     {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control', 'placeholder'=> 'Ingrese su Direccion')); }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('pais', 'Escoja un Pais') }}
                                        {{ Form::select('pais', $paises, null, array('class'=>'form-control','style'=>'' )) }}
                                    </div>
                                </div>
                              
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('ciudad', 'Escoja una Ciudad') }}
                                        {{ Form::select('ciudad', array(), null, array('class'=>'form-control','style'=>'' )) }}
                                            
                                    </div>
                                </div>
                        
                               
                            </div>
                            <br/>
                        {{ Form::submit('Registrar', array('class' => 'btn btn-lg btn-primary btn-block')) }}
                        {{ Form::close() }}

                          
                            
                        </div>
                    </div>
                    <div class="panel-footer">
                        
                        <a href="{{url('login')}}"><i class="glyphicon glyphicon-question-sign "></i> Ya tienes Cuenta? <strong>Inicia Sesion</strong></a>
</div></div></div> </div></div>
      {{ HTML::script('js/plugins/jquery-1.11.0.js'); }}
        {{ HTML::script('js/plugins/bootstrap.min.js'); }}
        {{ HTML::script('js/plugins/placeholder-shim.min.js'); }}
        {{ HTML::script('js/plugins/custom.js'); }}
        <script src="js/plugins/pnotify.custom.min.js"></script>
        {{ HTML::script('js/app.js'); }}
        <script>


$("#pais").on('change', function(ev) {
    cargarCiudades($(this).val());
});

        </script>
</body>
<footer class="container">
            <p id="footer-text"><small> Copyright © 2014 <a href="#">The3BallSoft</a></small></p>
        </footer>
</html>
