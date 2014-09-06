<?php

class DocumentosController extends BaseController {
    public function postDropzone(){
        $file = Input::file('file');
        $dir = public_path().'/archivos';
        $subir = $file->move($dir, $file->getClientOriginalName());
    }
}