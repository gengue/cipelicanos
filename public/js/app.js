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
function msg_actualizadocorrecto() {
    alert('Se ha actualizado correctamente', 'Listo!', 'success', 'glyphicon glyphicon-refresh');
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
//$(document).ajaxStart($.blockUI({ message: 'Cargando...',   css: { 
//            border: 'none', 
//            padding: '15px', 
//            backgroundColor: '#000', 
//            '-webkit-border-radius': '10px', 
//            '-moz-border-radius': '10px', 
//            opacity: .5, 
//            color: '#fff' 
//        } })).ajaxStop($.unblockUI);

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
                url: '/dashboard',
                type: 'GET',
                beforeSend: function() {
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
 *  PRODUCTOS  
 *
 */

function abrirProductos() {

    $.ajax(
            {
                url: '/productos',
                type: 'GET',
                beforeSend: function() {
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}

function mostrarCrearProducto() {

    $.ajax(
            {
                url: '/productos/create',
                type: 'GET',
                beforeSend: function() {
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        msg_guadadocorreto()
                        abrirProductos();

                    }


                }
            });
}
function mostrarEditarProducto(id) {

    $.ajax(
            {
                url: '/productos/' + id + '/edit',
                type: 'GET',
                beforeSend: function() {
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
function eliminarProducto(id) {
    $.ajax(
            {
                url: '/productos/' + id,
                type: 'DELETE',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearPedido() {

    $.ajax(
            {
                url: '/pedidos/create',
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}
function insertarGuiasAjax(i, id) {
    if (i === DFormGuias.length)
        return;

    DFormGuias[i].append('pedido_id', id)
    $.ajax({
        url: '/guias',
        type: 'POST',
        data: DFormGuias[i],
        cache: false,
        mimeType: "multipart/form-data",
        contentType: false,
        processData: false,
        success: function(data, textStatus, jqXHR)
        {
            //alert(data);
            insertarGuiasAjax(i + 1, id);
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            //alert(textStatus);
        }
    });
}

function crearPedido(datos) {
    $.ajax({
        url: '/pedidos',
        type: 'POST',
        data: datos,
        beforeSend: function() {
            bloquear();
        },
        success: function(data) {
            desbloquear();
            if (data.msg === 'error') {
                msg_guadadoerror();
            } else {
                if (data.id_pedido) {
                    //alert(data.id_pedido);
                    insertarGuiasAjax(0, data.id_pedido);
                    //Insertamos los archivos
                    thisDropzone.on('sending', function(file, xhr, formData) {
                        formData.append('pedido_id', data.id_pedido);
                    });

                    thisDropzone.processQueue();
                }
                // thisDropzone.on('queuecomplete', function(){
                    
                // });
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                    var select = document.getElementById("id_containers");
                    for (var i = 0; i < select.length; i++) {
                        containers.push(select.options[i].text);
                    }
                    actualizarContainers();
                }
            });
}
function editarPedido(datos, id) {
    $.ajax(
            {
                url: '/pedidos/' + id,
                type: 'PUT',
                data: datos,
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
function finalizarPedido(id){
    $.ajax(
            {
                url: '/pedidos/finalizar/' + id,
                type: 'POST',
                beforeSend: function() {
                    bloquear();
                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_guadadocorreto();
                    } else {
                        abrirPedidos();
                        msg_actualizadocorrecto();
                    }

                }
            });
}
function eliminarPedido(id) {
    $.ajax(
            {
                url: '/pedidos/' + id,
                type: 'DELETE',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
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
function abrirHistorialPedidos() {
    $.ajax(
            {
                url: '/pedidos/historial',
                type: 'GET',
                beforeSend: function() {
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
 *  NAVIERAS  
 *
 */
function abrirNavieras() {

    $.ajax(
            {
                url: '/navieras',
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearNaviera() {

    $.ajax(
            {
                url: '/navieras/create',
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
function eliminarNaviera(id) {
    $.ajax(
            {
                url: '/navieras/' + id,
                type: 'DELETE',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearProveedores() {

    $.ajax(
            {
                url: '/proveedores/create',
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}

function mostrarEditarProveedores(id) {

    $.ajax(
            {
                url: '/proveedores/' + id + '/edit',
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
function editarProveedores(datos, id) {
    $.ajax(
            {
                url: '/proveedores/' + id,
                type: 'PUT',
                data: datos,
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirProveedores();
                        msg_guadadocorreto();
                    }

                }
            });
}
function mostrarDetalleProveedores(id) {
    $.ajax(
            {
                url: '/proveedores/' + id,
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
function eliminarProveedores(id) {
    $.ajax(
            {
                url: '/proveedores/' + id,
                type: 'DELETE',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_borradoerror();
                    } else {
                        abrirProveedores();
                        msg_borradocorrecto();
                    }

                }
            });
}
function crearProveedor(datos) {

    $.ajax(
            {
                url: '/proveedores',
                type: 'POST',
                data: datos,
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirProveedores();
                        msg_guadadocorreto();
                    }
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}
function mostrarCrearUsuario() {

    $.ajax(
            {
                url: '/usuarios/create',
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}

function mostrarEditarUsuarios(id) {

    $.ajax(
            {
                url: '/usuarios/' + id + '/edit',
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
function editarUsuarios(datos, id) {
    $.ajax(
            {
                url: '/usuarios/' + id,
                type: 'PUT',
                data: datos,
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirUsuarios();
                        msg_guadadocorreto();
                    }

                }
            });
}
function mostrarDetalleUsuarios(id) {
    $.ajax(
            {
                url: '/usuarios/' + id,
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}

function eliminarUsuarios(id) {
    $.ajax(
            {
                url: '/usuarios/' + id,
                type: 'DELETE',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_borradoerror();
                    } else {
                        abrirUsuarios();
                        msg_borradocorrecto();
                    }

                }
            });
}
    
function crearUsuarios(datos) {

    $.ajax(
            {
                url: '/usuarios',
                type: 'POST',
                data: datos,
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_guadadoerror();
                    } else {
                        abrirUsuarios();
                        msg_guadadocorreto();
                    }
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
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
function aprobarCliente(aprobado, id) {

    if (aprobado) {
        $.ajax(
                {
                    url: '/usuarios/clientes/aprobar/' + id,
                    type: 'GET',
                    beforeSend: function() {
                        bloquear();

                    },
                    data: {estado: "ACTIVO"},
                    success: function(data) {
                        desbloquear();
                        if (data.msg === 'error') {
                            msg_guadadoerror();
                        } else {
                            abrirClientes();
                            msg_guadadocorreto();
                        }

                    }
                });
    } else {
        eliminarCliente(id);
    }
}
function eliminarCliente(id) {
    $.ajax(
            {
                url: '/usuarios/' + id,
                type: 'DELETE',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    if (data.msg === 'error') {
                        msg_borradoerror();
                    } else {
                        abrirClientes();
                        msg_borradocorrecto();
                    }

                }
            });
}


function mostrarDetalleCliente(id) {
    $.ajax(
            {
                url: '/usuarios/' + id,
                type: 'GET',
                beforeSend: function() {
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
 *  COMPAÑIAS 
 *
 */
function abrirCompanias() {

    $.ajax(
            {
                url: '/companias',
                type: 'GET',
                beforeSend: function() {
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
                url: '/companias/create',
                type: 'GET',
                beforeSend: function() {
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
                url: '/companias',
                type: 'POST',
                data: datos,
                beforeSend: function() {
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
                url: '/companias/' + id + '/edit',
                type: 'GET',
                beforeSend: function() {
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
                url: '/companias/' + id,
                type: 'PUT',
                data: datos,
                beforeSend: function() {
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
                url: '/companias/' + id,
                type: 'DELETE',
                beforeSend: function() {
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
                url: '/companias/' + id,
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });
}
/* 
 * CARGA DE LISTAS ASINCRONAS
 * 
 * */
function cargarProductos(id_proveedor) {
    $.ajax(
            {
                url: '/proveedores/api/productos/' + id_proveedor,
                type: 'GET',
                success: function(data) {
                    cargarLista(data, 'producto_id');
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
//funcion semi-generica para cargar listas asincronas
//recibe el array de datos y el selector donde se cargara
function cargarLista(datos, sel) {
    var cad = "";
    $.each(datos, function(pos, item) {
        cad += '<option value=' + item.id + '>' + item.nombre + '</option>';
    });

    $("#" + sel).html(cad);
}

/*
 * perfil 
 * 
 */

function abrirPerfil() {

    $.ajax(
            {
                url: '/perfil',
                type: 'GET',
                beforeSend: function() {
                    bloquear();

                },
                success: function(data) {
                    desbloquear();
                    $('#page-wrapper').html(data);
                }
            });

}

function mostrarEditarPerfil(id) {

    $.ajax(
            {
                url: 'perfil/' + id + '/edit',
                type: 'GET',
                beforeSend: function() {
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
                url: '/perfil/cambiarPassword/',
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

function actualizarPasswordUsuario(datos, id){
    $.ajax(
            {
                url: '/usuarios/cambiarPasswordUsuario/'+id,
                type: 'POST',
                data: datos,
                success: function(res) {
                  if(res.msg === "ok"){
                    $('#modalCambiarPassword').modal('hide');
                    alert("Contraseña actualizada con exito", "Exito", "success");
                  }
                  if(res.msg === "errorConfirm"){
                    alert("Las contraseñas no coinciden", "Error", "error");
                  }
                }
            });
}
function editarPerfil(datos, id) {
    $.ajax(
            {
                url: '/perfil/' + id,
                type: 'PUT',
                data: datos,
                beforeSend: function() {
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