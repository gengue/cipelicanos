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

function bloquear() {
    $('#carga').block({message: '<div class="center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>', css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff'
        }});
}
function desbloquear() {
    $('#carga').unblock();
}
window.addEventListener('load', function() {

    PNotify.prototype.options.delay = 1500;
    window.alert = function(message, title, type, icon) {
        new PNotify({
            title: title,
            text: message,
            type: type,
            icon: icon,
            nonblock: {
                nonblock: true,
                nonblock_opacity: .2
            }
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
                	bloquear();
                },
                success: function(data) {
                	desbloquear();
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
                	bloquear();
                },
                success: function(data) {
                	desbloquear();
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
                	bloquear();
                },
                success: function(data) {
                	desbloquear();
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
                   bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                url: '/mod_cliente/companias/'+id+'/edit',
                type: 'GET',
                beforeSend: function(){
                  bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
/* 
 * PERFILES
 * 
 */
function abrirPerfil() {

    $.ajax(
            {
                url: '/mod_cliente/perfil',
                type: 'GET',
                beforeSend: function(){
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}

function mostrarCambiarPassword(id) {
    $('#modalCambiarPassword').modal();
}

function actualizarPassword(datos){
    $.ajax(
            {
                url: '/mod_cliente/perfil/cambiarPassword/',
                type: 'POST',
                data: datos,
                success: function(res) {
                  if(res.msg === "ok"){
                    $('#modalCambiarPassword').modal('hide');
                    alert("Contraseña actualizada con exito", "Exito", "success");
                  }
                  if(res.msg === "errorPass"){
                    alert("Su contraseña actual es invalida", "Error", "error");
                  }
                  if(res.msg === "errorConfirm"){
                    alert("Las contraseñas no coinciden", "Error", "error");
                  }
                }
            });
}
function mostrarEditarPerfil(id) {

    $.ajax(
            {
                url: '/mod_cliente/perfil/'+id+'/edit',
                type: 'GET',
                beforeSend: function(){
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
function editarPerfil(datos, id) {
    $.ajax(
            {
                url: '/mod_cliente/perfil/' + id,
                type: 'PUT',
                data: datos,
                beforeSend: function(){
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirPerfil();
                        msg_guadadocorreto();
                    }

                }
            });
}


function cargarCiudades(id_pais) {
    $.ajax(
            {
                url: '/api/paises/' + id_pais,
                type: 'GET',
                success: function(data) {
                    cargarLista(data, 'ciudad');
                }
            });
}
function cargarLista(datos, sel) {
    var cad = "";
    $.each(datos, function(pos, item) {
        cad += '<option value=' + item.id + '>' + item.nombre + '</option>';
    });

    $("#" + sel).html(cad);
}
