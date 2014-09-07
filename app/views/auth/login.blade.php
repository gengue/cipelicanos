<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Login | C.I Pelicanos</title>
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/plugins/login.css'); }}
        {{ HTML::style('css/plugins/animate-custom.css'); }}
        {{ HTML::script('js/plugins/jquery-1.11.0.min.js'); }}  
        {{ HTML::script('js/plugins/bootstrap.min.js'); }}      
        {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}
    
    
   
    
    

     <style type="text/css">
        body{padding-top:80px;} </style>


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-4  clearfix animated flipInX"  >
		<div class="col-xs-12 col-sm-12 col-md-8 well ">
                     <div class="page-icon animated bounceInDown ">
                        <img src="{{ asset('images/login-key-icon.png')}}" alt="User icon">
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
			    	 {{ Form::open(array('url' => 'login')) }}
                    
			    	  	<div class="form-group">
			    		    
			    		     {{ Form::text('correo', Input::old('email'), array('class' => 'form-control', 'placeholder'=> 'Correo Electronico')); }}
                                        </div>
			    		<div class="form-group">
			    			{{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'Contraseña')); }}
			    		   </div>
			 		<a href="#"><i class="glyphicon glyphicon-user "></i> Recordar Contraseña </a>
                                        <br/>
                                        <br/> 
			    		
			    	{{ Form::submit('Iniciar Sesion', array('class' => 'btn btn-lg btn-primary btn-block')) }}
                            {{ Form::close() }}
			      	</form>
			    </div>
			</div>
                   <div class="panel-footer">
			    
			 	 <a href="{{url('registro')}}"><i class="glyphicon glyphicon-question-sign "></i> Desea <strong>Registrarse?</strong></a></div> 
                       
		</div>
	</div></div>
</div><script type="text/javascript">
</script>
</body>
<footer class="container">
            <p id="footer-text"><small> Copyright © 2014 <a href="#">The3BallSoft</a></small></p>
        </footer>
</html>
