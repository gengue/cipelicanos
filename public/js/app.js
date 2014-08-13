/*
 *
 *  PRODUCTOS  
 *
 */

function abrirProductos() {

    $.ajax(
            {
                url: '/productos',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}

function mostrarCrearProducto() {

    $.ajax(
            {
                url: '/productos/create',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
/*
 *
 *  PEDIDOS  
 *
 */
function abrirPedidos() {

    $.ajax(
            {
                url: '/pedidos',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearPedido() {

    $.ajax(
            {
                url: '/pedidos/create',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
/*
 *
 *  NAVIERAS  
 *
 */
function abrirNavieras() {

    $.ajax(
            {
                url: '/navieras',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearNaviera() {

    $.ajax(
            {
                url: '/navieras/create',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
/*
 *
 *  PROVEEDORES  
 *
 */
function abrirProveedores() {

    $.ajax(
            {
                url: '/proveedores',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearProveedores() {

    $.ajax(
            {
                url: '/proveedores/create',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
/*
 *
 *  USUARIOS 
 *
 */
function abrirUsuarios() {

    $.ajax(
            {
                url: '/usuarios',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearUsuario() {

    $.ajax(
            {
                url: '/usuarios/create',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}
//function abrirClientes() {
//
//    $.ajax(
//            {
//                url: '/clientes',
//                type: 'GET',
//                success: function(data) {
//                    $('#page-wrapper').html(data);
//                }
//            });
//
//}
