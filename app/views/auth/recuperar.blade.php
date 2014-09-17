<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Recuperar  | C.I Pelicanos</title>
       <html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Login | C.I Pelicanos</title>
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/plugins/login.css'); }}
        
        {{ HTML::script('js/plugins/jquery-1.11.0.js'); }}  
        {{ HTML::script('js/plugins/bootstrap.min.js'); }}      
        {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}
  
</head>
<body>
<div id="fullscreen_bg" class="fullscreen_bg"><div/>

<div class="container">
       
       {{ Form::open(array('url' => 'recuperar', 'id' => 'recuperarForm')) }}
                            <div class="form-signin">
         
   
         <h1 class="form-signin-heading text-muted"><a href="http://cipelicanos.biz"><img class="rebotar zoomIt" src="{{ asset('images/LOGO1.png')}}" alt="Company Logo"></a></a></h1>
          {{-- Preguntamos si hay algÃºn mensaje de error y si hay lo mostramos  --}}
                            @if(Session::has('mensaje_error'))
                            <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                            @endif
                            @if(Session::has('mensaje'))
                            <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
                            @endif
         
          {{ Form::text('correo', Input::old('email'), array('class' => 'form-control', 'placeholder'=> 'Correo Electronico')); }}
           <br>

          {{ Form::submit('Recuperar Contraseña', array('class' => 'btn-lg btn-primary btn-block')) }}
          <div align="left">
          <a style="color:#FFFFFF;text-align: center" href="{{url('login')}}" class='btn-lg btn-primary btn-block'>Iniciar Sesion</a></div>
 
          {{ Form::close() }}
     
</div>
  <br>
  <br><br><br>
  <br>
  <br>

  <footer class="container">
       <div align="center">
              <p id="footer-text"><small style="color:#FFFFFF">  Desarrollado por  <a style="color:#FFFFFF"  href="http://the3ballsoft.com/">The3BallSoft</a></small></p>
         </div> 
  </footer>
  
</body>

</html>
