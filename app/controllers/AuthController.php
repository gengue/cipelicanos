<?php

class AuthController extends BaseController {

    public function getLogin() {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check()) {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('auth.login');
    }

    public function postLogin() {
        $rules = array(
            'correo' => 'required|email',
            'password' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('login')
                            ->with('mensaje_error', 'Tus datos no son válidos')
                            ->withInput();
        } else {
            // Guardamos en un arreglo los datos del usuario.
            $userdata = array(
                'correo' => Input::get('correo'),
                'password' => Input::get('password')
            );
            // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
            if (Auth::attempt($userdata)) {
                return Redirect::to('/'); 
            }
            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            return Redirect::to('login')
                            ->with('mensaje_error', 'Tus datos son incorrectos')
                            ->withInput(Input::except('password'));
        }
    }

    public function getRegistro() {
        $paises = Country::lists('nombre', 'Code');
        return View::make('auth.registro')->with('paises', $paises);
    }

    public function postRegistro() {
        $validator = Validator::make(Input::all(), Usuario::$rules);

        if ($validator->passes()) {

            $usuario = new Usuario;
            $usuario->nombre = Input::get('nombre');
            $usuario->password = Hash::make(Input::get('password'));
            $usuario->apellido = Input::get('apellido');
            $usuario->telefono = Input::get('telefono');
            $usuario->correo = Input::get('correo');
            $usuario->direccion = Input::get('direccion');
            $usuario->pais_id = Input::get('pais');
            $usuario->ciudad_id = Input::get('ciudad');
            $usuario->tipo_usuario = 'CLIENTE';
            $usuario->save();

            return Redirect::to('login')->with('mensaje', 'Gracias por el registro!');
        } else {
            return Redirect::to('registro')->with('mensaje_error', 'Se encontro error en algunos campos')->withErrors($validator)->withInput();
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('login')->with('mensaje', 'Ha cerrado sesion!');
    }

}
