//SEGURIDAD CON TOKEN
$.ajaxSetup({
    headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
});
//ALERTAS
function msg_noimplementado() {
    alert('Aun no implementado', 'Ups!', 'info', 'glyphicon glyphicon-exclamation-sign');
}
function msg_guadadocorreto() {
    alert('Ha sido creado correctamente', 'Listo!', 'success', 'glyphicon glyphicon-floppy-saved');
}
function msg_guadadoerror() {
    alert('Algunos campos son obligatorios', 'Error', 'error', 'glyphicon glyphicon-warning-sign');
}
function msg_borradocorrecto() {
    alert('Se ha borrado Correctamente', 'Listo!', 'success', 'glyphicon glyphicon-floppy-remove');
}
function msg_borradoerror() {
    alert('No se pudo borrar', 'Error', 'error', 'glyphicon glyphicon-warning-sign');
}

window.addEventListener('load', function() {

    PNotify.prototype.options.delay = 1500;
    window.alert = function(message, title, type, icon) {
        new PNotify({
            title: title,
            text: message,
            type: type,
            icon: icon
        });
    };
}, false);
//INICIO
function abrirDashboard() {
    $.ajax(
            {
                url: '/dashboard',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);

                }
            });

}

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
function crearProducto(datos) {

    $.ajax(
            {
                url: '/productos',
                type: 'POST',
                data: datos,
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirProductos();
                        msg_guadadocorreto()
                    }


                }
            });
}
function mostrarEditarProducto(id) {

    $.ajax(
            {
                url: '/productos/' + id + '/edit',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });
}
function editarProducto(datos, id) {
    $.ajax(
            {
                url: '/productos/' + id,
                type: 'PUT',
                data: datos,
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirProductos();
                        msg_guadadocorreto();
                    }

                }
            });
}
function mostrarDetalleProducto(id) {
    $.ajax(
            {
                url: '/productos/' + id,
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });
}
function eliminarProducto(id) {
    $.ajax(
            {
                url: '/productos/' + id,
                type: 'DELETE',
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_borradoerror();
                    } else {
                        abrirProductos();
                        msg_borradocorrecto();
                    }

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
function crearPedido(datos) {

    $.ajax(
            {
                url: '/pedidos',
                type: 'POST',
                data: datos,
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirPedidos();
                        msg_guadadocorreto();
                    }

                }
            });
}
function mostrarEditarPedido(id) {

    $.ajax(
            {
                url: '/pedidos/' + id + '/edit',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });
}
function editarPedido(datos, id) {
    $.ajax(
            {
                url: '/pedidos/' + id,
                type: 'PUT',
                data: datos,
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirPedidos();
                        msg_guadadocorreto();
                    }

                }
            });
}
function mostrarDetallePedido(id) {
    $.ajax(
            {
                url: '/pedidos/' + id,
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });
}
function eliminarPedido(id) {
    $.ajax(
            {
                url: '/pedidos/' + id,
                type: 'DELETE',
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_borradoerror();
                    } else {
                        abrirPedidos();
                        msg_borradocorrecto();
                    }

                }
            });
}
/* 
 * HISTORIAL DE PEDIDOS
 * 
 */
function abrirHistorialPedidos(){
    $.ajax(
            {
                url: '/pedidos/historial', 
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
function crearNaviera(datos) {

    $.ajax(
            {
                url: '/navieras',
                type: 'POST',
                data: datos,
                success: function(data) {
                    if(data.msg ===  'error'){
                        msg_guadadoerror();
                    }else{
                        abrirNavieras();
                        msg_guadadocorreto();
                    }
                }
            });

}
function mostrarEditarNaviera(id) {

    $.ajax(
            {
                url: '/navieras/' + id + '/edit',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });
}
function editarNaviera(datos, id) {
    $.ajax(
            {
                url: '/navieras/' + id,
                type: 'PUT',
                data: datos,
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirNavieras();
                        msg_guadadocorreto();
                    }

                }
            });
}
function mostrarDetalleNaviera(id) {
    $.ajax(
            {
                url: '/navieras/' + id,
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });
}
function eliminarNaviera(id) {
    $.ajax(
            {
                url: '/navieras/' + id,
                type: 'DELETE',
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_borradoerror();
                    } else {
                        abrirNavieras();
                        msg_borradocorrecto();
                    }

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
/*
 *
 *  CLIENTES 
 *
 */
function abrirClientes() {

    $.ajax(
            {
                url: '/usuarios/clientes',
                type: 'GET',
                success: function(data) {
                    $('#page-wrapper').html(data);
                }
            });
}
function aprobarCliente(aprobado, id){
   
    if(aprobado){        
        $.ajax(
            {
                url: '/usuarios/clientes/aprobar/' + id,
                type: 'GET',
                data: {estado: "ACTIVO"},
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirClientes();
                        msg_guadadocorreto();
                    }

                }
            });
    }else{
        eliminarCliente(id);
    }
}
 function eliminarCliente(id){
     $.ajax(
            {
                url: '/usuarios/' + id,
                type: 'DELETE',
                success: function(data) {
                    if (data.msg === 'error') {
                        msg_borradoerror();
                    } else {
                        abrirClientes();
                        msg_borradocorrecto();
                    }

                }
            });
 }