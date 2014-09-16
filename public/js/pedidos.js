var containers = [];
var DFormGuias = [];
var guias = [];
var thisDropzone;

//Dropzone
$('#dropzone').dropzone({
    url: '/documentos/upload/',
    init: function() {
        thisDropzone = this;
        //Cargar archivos en el directorio
//            $.get('documentos/upload', function(data) {
//                $.each($.parseJSON(data), function(key, value) {
//                    var mockFile = {name: value.name, size: value.size};
//                    thisDropzone.options.addedfile.call(thisDropzone, mockFile);
//                    thisDropzone.options.thumbnail.call(thisDropzone, mockFile, 'archivos/PDF-2.png');
//                });
//            });
        this.on("error", function(file, message) {
            alert(message);
        });
        this.on("addedfile", function(file) {
            //alert("Added file." + file.name);
        });

        this.on("removedfile", function(file) {
            if (!file.name) {
                return;
            }
        });
    }
});

//Envio de formulario principal
$("#formPedidos").submit(function(e) {
    e.preventDefault();
    $("#id_containers").val(containers);
    var datos = $("#formPedidos").serialize();

//    console.log(datos);
    crearPedido(datos);
});

/****** CONTAINERS **********/
//Envio de formulario de Cointainers
$("#formContainer").submit(function(e) {
    e.preventDefault();
    var id = $('#id').val();
    if (id) {
        var datos = $('input:text[name=numero_container]').val();
        $('input:text[name=numero_container]').val('');
        containers[id] = datos;
        $('#id').val('');
        $('#modalContainer').modal('hide');
        actualizarContainers();
        alert('Editado!');
    } else {
        var datos = $('input:text[name=numero_container]').val();
        $('input:text[name=numero_container]').val('');
        containers.push(datos.toUpperCase());
        $('#modalContainer').modal('hide');
        actualizarContainers();
        alert('Agregado!');
    }
});

function agregarContainer() {
    $('#btnsubmit').val('Crear container!');
    $('#modalContainer').modal();
}

function editarContainer(id) {
    $('#id').val(id);
    $('#btnsubmit').val('Editar');
    $('input:text[name=numero_container]').val(containers[id]);
    $('#modalContainer').modal();
}

function eliminarContainer(id) {
    containers.splice(id, 1);
    actualizarContainers();
}

function actualizarContainers() {
    $("#ulContainers").html("");
    for (var i = 0; i < containers.length; i++) {
        $("#ulContainers").append('<li class="list-group-item">' + containers[i] + '   ' + ' <a href="javascript:editarContainer(' + i + ')">Editar </a><a href="javascript:eliminarContainer(' + i + ')">Borrar</a></li>');
    }
}

/****** GUIAS ********/
$('#formGuia').submit(function(e) {
    e.preventDefault();
    var archivo = $('#formGuia :input[name=url_archivo]')[0].files[0];
    var numero_guia = $('#formGuia :input[name=numero_guia]').val();
    var empresa_envio = $('#formGuia :input[name=empresa_envio]').val();

    //if (numero_guia > 1 && empresa_envio > 1) {
    var gui = {
        'numero_guia': numero_guia,
        'empresa_envio': empresa_envio,
    }
    if (archivo) {
        gui.url_archivo = archivo.name;
        gui.archivo = archivo;
    } else {
        gui.url_archivo = 'No seleccionado'
        gui.archivo = null;
    }

    var formdata = new FormData();
    formdata.append('numero_guia', gui.numero_guia);
    formdata.append('empresa_envio', gui.empresa_envio);
    formdata.append('url_archivo', gui.archivo);
    DFormGuias.push(formdata);

    guias.push(gui);
    actualizarGuia();


    $('#formGuia')[0].reset();
    $('#modalGuia').modal('hide');
//    } else {
//        alert('Los campos  Numero de guia y Empresa de envio son necesarios');
//    }

    return false;

});

function actualizarGuia() {
    $('#ulGuias').html('');
    for (var i = 0; i < guias.length; i++) {
        $('#ulGuias').append('<li class="list-group-item">' + 'Numero de Guia:  ' + guias[i].numero_guia + ' ->Empresa de Envio:  ' + guias[i].empresa_envio + '  ->Archivo:  ' + guias[i].url_archivo + '   ' + ' <a href="javascript:editarGuia(' + i + ')">Editar </a><a href="javascript:eliminarGuia(' + i + ')">Borrar</a></li>');
    }
}

function editarGuia(id) {
    alert('Aun no implemetado');
}

function eliminarGuia(id) {
    guias.splice(id, 1);
    DFormGuias.splice(id, 1);
    actualizarGuia();

}

function agregarGuia() {
    $('#modalGuia').modal();
}

$("#proveedor_id").on('change', function(ev) {
    cargarProductos($(this).val());
});

