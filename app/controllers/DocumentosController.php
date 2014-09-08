<?php

class DocumentosController extends BaseController {

    public function postDropzone() {
        Log::info(Input::all());
        $file = Input::file('file');
        $pedido_id = Input::get('pedido_id');
        $dir = public_path() . '/archivos/'.$pedido_id.'/otros';
        $subir = $file->move($dir, $file->getClientOriginalName());
    }

    public function getDropzone() {
        $result = array();
        $dir = public_path() . '/archivos/' . 'encoded/';
        $files = scandir($dir);                 //1
        

        if (false !== $files) {
            foreach ($files as $file) {
                if ('.' != $file && '..' != $file) {       //2
                    $obj['name'] = $file;
                    $obj['size'] = filesize($dir . '/' . $file);
                    $result[] = $obj;
                }
            }
        }

        header('Content-type: text/json');              //3
        header('Content-type: application/json');
        echo json_encode($result);
    }
    public function delete($id){
        File::delete(public_path().'/encoded/'.$id);
    }

}
