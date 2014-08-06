<?php

class GuiasController extends BaseController {

    public function index() {
        $guias = Guia::all();

        return View::make('guias.index')
                        ->with('guias', $guias);
    }

    public function create() {
        return View::make('guias.create');
    }

    public function store() {

        $rules = array(
            'numero_guia' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('guias/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            $dir = 'public/archivos/';
            $nombreArchivo = Input::get('numero_guia') . '.pdf';
            $archivo = Input::file('url_archivo');
            // store            
            $guia = new Guia;
            $guia->numero_guia = Input::get('numero_guia');
            $guia->empresa_envio = Input::get('empresa_envio');
            $guia->url_archivo = $dir . $nombreArchivo;

            if ($guia->save()) {
                $archivo->move($dir, $nombreArchivo);
            }
            // redirect
            Session::flash('message', 'Guia creada correctamente!');
            return Redirect::to('guias');
        }
    }

    public function show($id) {

        $guia = Guia::find($id);

        return View::make('guias.show')
                        ->with('guia', $guia);
    }

    public function edit($id) {

        $guia = Guia::find($id);

        return View::make('guias.edit')
                        ->with('guia', $guia);
    }

    public function update($id) {
        $rules = array(
            'numero_guia' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('guias/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            $dir = 'public/archivos/';
            $nombreArchivo = Input::get('numero_guia') . '.pdf';

            // store            
            $guia = Guia::find($id);
            $guia->numero_guia = Input::get('numero_guia');
            $guia->empresa_envio = Input::get('empresa_envio');
            if (Input::hasFile('url_archivo')) {
                $archivo = Input::file('url_archivo');
                $guia->url_archivo = $dir . $nombreArchivo;
                $archivo->move($dir, $nombreArchivo);             
            }
           
            $guia->save();           

            // redirect
            Session::flash('message', 'Guia actualizada correctamente!');
            return Redirect::to('guias');
        }
    }

    public function destroy($id) {
        // delete
        $guia = Guia::find($id);
        $guia->delete();

        // redirect
        Session::flash('message', 'Guia eliminada correctamente!');
        return Redirect::to('guias');
    }

}
