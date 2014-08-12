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
function abrirClientes() {

    $.ajax(
            {
                url: '/clientes',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });

}