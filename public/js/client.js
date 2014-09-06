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
                url: '/mod_cliente/dashboard',
                type: 'GET',
                beforeSend: function(){
                	$('#page-wrapper').css('padding-top', '20%');
                	$('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                	$('#page-wrapper').css('padding-top', '0');
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
                url: '/mod_cliente/pedidos',
                type: 'GET',
                beforeSend: function(){
                	$('#page-wrapper').css('padding-top', '20%');
                	$('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                	$('#page-wrapper').css('padding-top', '0');
                    $('#page-wrapper').html(data);
                }
            });

}

/* 
 * HISTORIAL DE PEDIDOS
 * 
 */
function abrirHistorialPedidos() {
    $.ajax(
            {
                url: '/mod_cliente/historial',
                type: 'GET',
                beforeSend: function(){
                	$('#page-wrapper').css('padding-top', '20%');
                	$('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                	$('#page-wrapper').css('padding-top', '0');
                    $('#page-wrapper').html(data);
                }
            });
}
/* 
 * COMPAÑIAS
 * 
 */
function abrirCompanias() {

    $.ajax(
            {
                url: '/mod_cliente/companias',
                type: 'GET',
                beforeSend: function(){
                    $('#page-wrapper').css('padding-top', '20%');
                    $('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                    $('#page-wrapper').css('padding-top', '0');
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearCompanias() {

    $.ajax(
            {
                url: '/mod_cliente/companias/create',
                type: 'GET',
                beforeSend: function(){
                    $('#page-wrapper').css('padding-top', '20%');
                    $('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                    $('#page-wrapper').css('padding-top', '0');
                    $('#page-wrapper').html(data);
                }
            });

}

function crearCompania(datos) {

    $.ajax(
            {
                url: '/mod_cliente/companias',
                type: 'POST',
                data: datos,
                beforeSend: function(){
                    $('#page-wrapper').css('padding-top', '20%');
                    $('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                    $('#page-wrapper').css('padding-top', '0');
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirCompanias();
                        msg_guadadocorreto();
                    }
                }
            });
}

function mostrarEditarCompania(id) {

    $.ajax(
            {
                url: '/mod_cliente/companias/' + id + '/edit',
                type: 'GET',
                beforeSend: function(){
                    $('#page-wrapper').css('padding-top', '20%');
                    $('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                    $('#page-wrapper').css('padding-top', '0');
                    $('#page-wrapper').html(data);
                }
            });
}
function editarCompania(datos, id) {
    $.ajax(
            {
                url: '/mod_cliente/companias/' + id,
                type: 'PUT',
                data: datos,
                beforeSend: function(){
                    $('#page-wrapper').css('padding-top', '20%');
                    $('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                    $('#page-wrapper').css('padding-top', '0');
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirCompanias();
                        msg_guadadocorreto();
                    }

                }
            });
}
function eliminarCompania(id) {
    $.ajax(
            {
                url: '/mod_cliente/companias/' + id,
                type: 'DELETE',
                beforeSend: function(){
                    $('#page-wrapper').css('padding-top', '20%');
                    $('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                    $('#page-wrapper').css('padding-top', '0');
                    if (data.msg === 'error') {
                        msg_borradoerror();
                    } else {
                        abrirCompanias();
                        msg_borradocorrecto();
                    }

                }
            });
 }


function mostrarDetalleCompania(id) {
    $.ajax(
            {
                url: '/mod_cliente/companias/' + id,
                type: 'GET',
                beforeSend: function(){
                    $('#page-wrapper').css('padding-top', '20%');
                    $('#page-wrapper').html('<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
                },
                success: function(data) {
                    $('#page-wrapper').css('padding-top', '0');
                    $('#page-wrapper').html(data);
                }
            });
}