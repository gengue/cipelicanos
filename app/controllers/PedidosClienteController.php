<?php

class PedidosClienteController extends BaseController {

    public function pedidos() {

        $cliente = Usuario::find(Auth::id());
        
        foreach ($cliente->companias as $compania) {
             foreach ($compania->pedidos as $key => $value) {
                 if($value->estado == 'INACTIVO'){
                    unset($compania->pedidos[$key]);
                 }
             }
         }

        return View::make('mod_cliente.pedidos')
                    ->with('cliente',$cliente);
    }

    public function historial() {

         $cliente = Usuario::find(Auth::id());

         foreach ($cliente->companias as $compania) {
             foreach ($compania->pedidos as $key => $value) {
                 if($value->estado == 'ACTIVO'){
                    unset($compania->pedidos[$key]);
                 }
             }
         }

         return View::make('mod_cliente.historial')
                    ->with('cliente',$cliente);
    }


    // public function show($id) {

    //     $pedidosdb = new Pedido();
    //     $pedido = $pedidosdb->obtenerPedido($id);
    //     return View::make('pedidos.show', array('pedido' => $pedido));
    // }


}
// $postsFilter = Comments::with('Posts')->where('published', 1)->first();
// $posts= $postsFilter ->posts;

// $posts = Post::with(array('user' => function($query)
// {
//     $query->where('region_id', 'like', '6');
// }), 'lookingfors', 'playstyles', 'postcomments')->orderBy('id', 'DESC')->paginate(10);

// User::find(1)->posts()->where('category', '=', 'Eloquent')->get();