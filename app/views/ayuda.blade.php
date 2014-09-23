<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-info-circle"></i> Centro de Ayuda <small>Hola  <strong>{{ ' '.Auth::user()->nombre;}}</strong> , dejame ayudarte</small>
            </h1>
            
        </div>
    </div> 
    
    
     <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                 <li class="active"><a href="#" data-target-id="intro"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                <li ><a href="#" data-target-id="Pedidos"><i class="fa fa-fw fa-shopping-cart" > </i> Pedidos</a></li>
                <li><a href="#" data-target-id="clientes"><i class="fa fa-fw fa-money"></i> Clientes</a></li>
                <li><a href="#" data-target-id="companias"><i class="fa fa-fw fa-university"></i> Compa&ntilde;&iacute;as</a></li>
                <li><a href="#" data-target-id="productos"><i class="fa fa-fw fa-gift"></i> Productos</a></li>
                <li><a href="#" data-target-id="navieras"><i class="fa fa-fw fa-anchor"></i> Navieras</a></li>
                <li><a href="#" data-target-id="proveedores"><i class="fa fa-fw fa-suitcase"></i> Proveedores</a></li>
                <li><a href="#" data-target-id="historial"><i class="fa fa-fw fa-calendar"></i> Historial de Pedidos</a></li>
                <li><a href="#" data-target-id="usuarios"><i class="fa fa-fw fa-users"></i> Usuarios</a></li>
               
            </ul>
        </div>
       <div class="col-md-8 well admin-content" id="intro">
        <div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-arrows-v"></i> Como Funciona la plataforma?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>Al ingresar a la plataforma puede encontrar en el costado izquierdo los 
                    diferentes m&oacute;dulos o vistas a las cuales puede acceder. En el panel central, se puede observar informaci&oacute; dependiendo
                    de la vista en la cu&aacute;l se encuentre. De esta manera, la plataforma se encuentra desarrollada para que en cada una de las vistas
                    pueda encontrar toda la información y realizar cambios sobre los datos que correspondan a ella.
                    </p><p>En la vista de <a href="javascript:abrirDashboard();" target="_blank">Inicio</a> podrá encontrar los indicadores de actualizaciones:</p>
                    <p>
                        El indicador de color azúl le muestra cuantos pedidos tiene activos a la fecha; si pulsa en ver detalles lo dirigirá a la vista de Pedidos, donde encontrará un listado con los pedidos que se encuentran activos para los diferentes clientes que posee.
                    </p>
                    <p>
                       El indicador de color amarillo mostrará cuantos clientes posee y al pulsar en ver detalles lo dirigirá a la vista de clientes 
                    </p>
                    <p>
                        El indicador de color verde mostrará cuantos pedidos ya se han cumplido y al pulsar en ver detalles lo dirigirá a la vista de historial de pedidos, donde encontrará un listado con los pedidos que ya se han cumplido satizfactoriamente.
                    </p>
                    <p>Abajo de esto, encontrará una tabla con el listado básico de los últimos pedidos que que se han puesto en marcha, esta tabla cuenta con los campos de compañía a la cual se le realizó el pedido, el producto y la fecha de carga en el buque. 
                        En la parte inferior de la tabla puede ver el link ver todos los pedidos el cual lo dirigirá al avista de <a href="javascript:abrirPedidos();" target="_blank">Pedidos</a>.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-arrows-v"></i> Mis Modulos?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Los módulos de la plataforma estan diseñados con el fin de que pueda visualizar y manipular (ya sea creando, editando o eliminando) la información
                        que se presenta en cada uno de ellos, estos son:</p>
                    <p><a href="javascript:abrirPedidos();" target="_blank">Pedidos:</a>
                        <p>Donde encontrará un listado de los pedidos que se encuentran activos a la fecha.</p></p>
                    <p><a href="javascript:abrirClientes();" target="_blank">Clientes:</a>
                        <p>Donde podrá encontrar un listado con toda la información concerniente a los clientes que hacen uso de esta plataforma.</p></p>
                    <p><a href="javascript:abrirCompanias();" target="_blank">Compañías:</a>
                        <p>Donde encontrá un listado con toda la información concerniente a las compañías que pertenecen a los diferentes clientes y a las 
                        cuales les realiza pedidos, ya sean de importe o exporte de mercancía</p></p>
                    <p><a href="javascript:abrirProductos();" target="_blank">Productos:</a>
                        <p>Donde podrá encontrar un listado de los diferentes productos que puede cargar a un pedido.</p></p>
                    <p><a href="javascript:abrirNavieras();" target="_blank">Navieras:</a>
                        <p>Donde encontrará un listado con las diferentes navieras que transportan sus pedidos</p></p>
                    <p><a href="javascript:abrirProveedores();" target="_blank">Proveedores:</a>
                        <p>Donde prodrá encontrar un listado con los diferentes proveedores a los cuales compra los productos comercializados</p></p>
                    <p><a href="javascript:abrirHistorialPedidos();" target="_blank">Historial de pedidos:</a>
                        <p>Donde encontrará el listado con todos los pedidos que ya se han completado a satizfacción.</p></p>
                    <p><a href="javascript:abrirUsuarios();" target="_blank">Usuarios:</a>
                        <p>Donde podrá encontrar un listado con los diferentes usuarios de la plataforma ya sean clientes, digitadores o administrador.</p></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-arrows-v"></i> Mis Datos de Usuario</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Para acceder a sus datos de usuario solo basta con dirigirse a la parte superior derecha de la plataforma,
                    clickear sobre su nombre y a continuación en la opción desplegable que dice <a href="javascript:abrirPerfil();" target="_blank">Perfíl.</a>
                    <p>En la vista de su perfil podrá visualizar todos sus datos personales como lo son el tipo de usuario, nombre, apellidos, E-mail, etc., y podrá editar 
                        sus datos pulsando en el botón <a class="btn btn-small btn-primary"  target="_blank"> <i class="fa fa-edit"></i></a> , al igual que cambiar su contraseña con el botón <a class="btn btn-small btn-success"  target="_blank"> <i class="fa fa-lock"></i></a></p></p>
                </div>
            </div>
        </div>
    </div>
</div>
       </div>
       <div class="col-md-8 well admin-content"  id="Pedidos">
        <div class="bs-example">
    <div class="panel-group" id="accordion2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOn"><i class="fa fa-arrows-v"></i> Modulo Pedidos?</a>
                </h4>
            </div>
            <div id="collapseOn" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>En la vista de pedidos, podrá observar un listado con los pedidos que se encuentran activos para los diferentes clientes. estos se encuentran listados en una tabla que cuenta con los campos de producto, proveedor del producto Naviera con la que contrata el servicio de transporte, containers en los cuales viaja el producto, número de guía de envío de los documentos pertinentes al pedido, número de reserva del pedido, buque en el cual se transporta, la fecha de carga del container y la fecha de desembarque de este, además de un campo inicial que indica si el pedido es de tipo importación o exportación.</p>
                    <p>Arriba de esta tabla el campo de selección de la cantidad de pedidos que desea ver en la página (Mostrar entradas), en la cual puede seleccionar ver 10, 25, 50 o 100 pedidos en la misma página.</p>
                    <p>Al costado derecho se encuentra el campo buscar, el cual puede usarlo para buscar un pedido por cualquier campo, ya sea producto, proveedor, naviera, container, etc. sin necesidad de especificar el campo de busqueda.</p>
                    <p>Al costado derecho del nombre de cada campo de la tabla, encontrará unas flechas hacia arriba y abajo, al pulsar estas, los pedidos se organizan en orden ascendente respecto al campo donde pulsó las flechas. Al volver a pulsar las flechas la tabla volverá a listarse como lo estaba inicialmente. 
    en la parte superior de la página encontrará los botones <a class="btn btn-small btn-info"  target="_blank"> <i class="fa fa-list"></i>Listar todos</a> y <a class="btn btn-small btn-info"  target="_blank"> <i class="fa fa-plus"></i>Agregar pedido</a>.
    Al pulsar el botón <a class="btn btn-small btn-info"  target="_blank"> <i class="fa fa-list"></i>Listar todos</a> actualizará la tabla y listará todos los pedidos que se encuentren activos a la fecha.</p>
                    <p> <a href="javascript:abrirPedidos();" target="_blank">Ver Pedidos</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTw"><i class="fa fa-arrows-v"></i> Agregar Pedido?</a>
                </h4>
            </div>
            <div id="collapseTw" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al pulsar el botón <a class="btn btn-small btn-info"  target="_blank"> <i class="fa fa-plus"></i>Agregar pedido</a>, este lo dirigirá a la vista donde podrá ingresar todos los datos concernientes a un nuevo pedido
                    Podrá encontrar los campos como <a href="javascript:abrirCompanias();" target="_blank">Compañía</a> a la cual cargará el pedido, <a href="javascript:abrirProductos();" target="_blank">Producto</a>, <a href="javascript:abrirProveedores();" target="_blank">Proveedor</a> del producto y  <a href="javascript:abrirNavieras();" target="_blank">Navieras</a> que son listas desplegables, y para seleccionar el dato que necesita
                    tiene que serciorarse de que este se encuentre previamente creado.
                    <p>Luego de estos campos, podrá encontrar el botón <a id="aContainers" class="btn btn-primary btn-sm" role="button">Agregar Container</a>
                        el cuál al pulsarlo se despliega una ventana emergente donde podrá ingresar el número del container en el cuál viaja el pedido
                        y pulsar el botón <input class="btn btn-primary" id="btnsubmit" type="submit" value="Crear container!"> para agregarlo al pedido.</p>
                    <p>Abajo de esto, se encuentran los campos relacionados con el transporte del pedido en el buque y el tipo de pedido (importe o exporte), 
                        se encuentran los campos de fecha de carga  del pedido en el buque, fecha de abordaje  y fecha de entrega del pedido en el puerto destino 
                        Para ingresarlos datos en estos campos solo pulse el icono <span class="fa fa-calendar glyphicon glyphicon-calendar"></span> al lado de cada uno de estos y se desplegará un calendario donde podrá escoger la fecha necesitada.</p>
                    <p>Si desea cambiar de mes, en la parte superior del calendario se encuentran unas flechas a la izquierda y derecha para navegar en meses, o pulsando la fecha en el centro se pueden ver los meses del año. Si pulsa nuevamente la fecha, se despliegan años y puede seleccionar alguno
                        luego le mostrará el mes y seguido los días para que así comprete la fecha deseada.</p>
                    <p>En el campo Guias de documentos pulse el botón <a id="aGuias"  class="btn btn-primary btn-sm" role="button">Agregar Guia</a> y se despliega una ventana emergente donde puede ingresar 
                        el número de guía del envío de los documentos del pedido, la empresa de envío, y pulsando en <a target="_blank">Seleccionar archivo</a> se abre una ventana donde puede seleccionar los documentos que ha enviado con ese número de guía.
                        Luego pulse <input class="btn btn-primary" id="btnsubmit" type="submit" value="Crear Guia!"> y ésta será añadida al pedido en curso.</p>
                    <p>En la sección <a target="_blank">Otros documentos</a> puede clickear para seleccionar demás documentos relacionados con el pedido o puede arrastrarlos a esa sección y estos se cargarán.</p>
                    <p>Finalmente en la parte inferior se encuentan los botones <a class="btn btn-small btn-danger">Cancelar</a> con el que cancela la creación del pedido como tal y <input class="btn btn-primary" type="submit" value="Crear Pedido!"> con el que el pedido será procesado y cargado a la base de datos.</p>

                     <a href="javascript:mostrarCrearPedido();" target="_blank">Ir a Agregar Un Nuevo Pedido</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThre"><i class="fa fa-arrows-v"></i> Ver Detalle Del Pedido</a>
                </h4>
            </div>
            <div id="collapseThre" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de pedidos al costado derecho se encuentra el campo de opciones en el cual se encuenta el botón <a class="btn btn-small btn-success"  target="_blank"> <i class="fa fa-search"></i></a> con el cuál si lo pulsa podrá ver en mayor detalle todos los datos del pedido seleccionado </p>
                </div>
            </div>
        </div>
          <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4"><i class="fa fa-arrows-v"></i> Estado del Pedido</a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de pedidos al costado derecho se encuentra el campo de opciones en el cual se encuenta el botón <a class="btn btn-small btn-primary" href="javascript:abrirPedidos();" target="_blank"> <i class="fa fa-check"></i></a> con el cuál podrá cambiar el estado del pedido de EN TRAMITE a REALIZADO, lo que hará que este se remueva de la vista de pedidos
                        y se ubique en la vista de historial de pedidos</p>
                </div>
            </div>
        </div>
           <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><i class="fa fa-arrows-v"></i> Editar un Pedido</a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de pedidos al costado derecho se encuentra el campo de opciones en el cual se encuenta el botón <a class="btn btn-small btn-info" href="javascript:abrirPedidos();" target="_blank"><i class="fa fa-pencil"></i></a> con el cuál podrá editar los datos del pedido seleccionado</p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6"><i class="fa fa-arrows-v"></i> Eliminar Pedidos</a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de pedidos al costado derecho se encuentra el campo de opciones en el cual se encuenta el botón <a class="btn btn-small btn-danger" href="javascript:abrirPedidos();" target="_blank"> <i class="fa fa-trash-o"></i></a> con el cuál podrá eliminar el pedido seleccionado.
                        Al pulsar este botón, arriba de el se despliega una ventana de confirmación en la cual seleccionará SI para eliminar el pedido o NO para cancelar la acción.</p>
                </div>
            </div>
        </div>
         
    </div>
</div>
       </div>
       <div class="col-md-8 well admin-content" id="clientes">
            <div class="bs-example">
           <div class="panel-group" id="accordion3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion3" href="#collapse11"><i class="fa fa-arrows-v"></i> Modulo Cliente?</a>
                </h4>
            </div>
            <div id="collapse11" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>En la vista de clientes podrá encontrar un listado de los diferentes clientes a los cuales realiza pedidos.
    Estos clientes se encuentran organizados en una tabla con los campos de Nombre del cliente, teléfono, correo, dirección, país, ciudad, y finalmente un campo de opciones con tres botones, el verde para visualizar en detalle todos los datos del cliente seleccionado, uno azúl, el cuál lo dirigirá a la vista de editar los datos del cliente donde podrá realizar los cambios deseados y finalmente el botón rojo de eliminar cliente que al pulsarlo se despliega un campo de verificación para confirmar la acción.</p>
                    <p>Arriba de esta tabla el campo de selección de la cantidad de clientes que desea ver en la página (Mostrar entradas), en la cual puede seleccionar ver 10, 25, 50 o 100 clientes en la misma página.
                         Al costado derecho se encuentra el campo buscar, el cual puede usarlo para buscar un cliente por cualquier campo, ya sea nombre, teléfono, correo, dirección, etc. sin necesidad de especificar el campo de busqueda.
                         Caso tal de que en la tabla vea el texto de No hay datos disponibles en la tabla y ya ha creado clientes puede ser debido a que al momento de crear un usuario no seleccionó el tipo cliente para este y de esa manera no se será posible observarlo en esta vista. 
                    </p>
                    <p>Al costado derecho del nombre de cada campo de la tabla, encontrará unas flechas hacia arriba y abajo, al pulsar estas, los clientes se organizan en orden ascendente respecto al campo donde pulsó las flechas. Al volver a pulsar las flechas la tabla volverá a listarse como lo estaba inicialmente. 
                    </p>
                    <p><a href="javascript:abrirClientes();" target="_blank">Ver Clientes</a></p>
                </div>
            </div>
        </div>
       
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion3" href="#collapse13"><i class="fa fa-arrows-v"></i> Ver Detalle Del Cliente</a>
                </h4>
            </div>
            <div id="collapse13" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de clientes, al costado derecho de esta se encuentra el campo Opciones, en cada pedido puede encontrar el botón <a class="btn btn-small btn-success"  target="_blank"> <i class="fa fa-search"></i></a> con el cuál podrá ver los datos del cliente en detalle</p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse16"><i class="fa fa-arrows-v"></i> Eliminar Cliente</a>
                </h4>
            </div>
            <div id="collapse16" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de clientes, al costado derecho de esta se encuentra el campo Opciones, en cada cliente puede encontrar el botón <a class="btn btn-small btn-danger" href="javascript:abrirClientes();" target="_blank"> <i class="fa fa-trash-o"></i></a> con el cuál podrá elimiar el cliente seleccionado.
                    Al pulsar este botón, arriba de el se despliega una ventana de confirmación en la cual seleccionará SI para eliminar el cliente o NO para cancelar la acción.</p>
                </div>
            </div>
        </div>
         
    </div>
            </div>
        </div>
        <div class="col-md-8 well admin-content" id="companias">
           <div class="bs-example">
    <div class="panel-group" id="accordion2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#collapse111"><i class="fa fa-arrows-v"></i> Modulo Compañías?</a>
                </h4>
            </div>
            <div id="collapse111" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>En la vista de compañías podrá encontrar los datos de las compañías para las cuales realiza los diferentes pedidos, estas están organizadas en una tabla por los campos Nombre de la compañía, NIT, teléfono, correo electrónico, cliente al cuál pertenece la compañía y finalmente un campo de opciones que puede realizar sobre estas.</p>
                    <p>Arriba de esta tabla el campo de selección de la cantidad de compañías que desea ver en la página (Mostrar entradas), en la cual puede seleccionar ver 10, 25, 50 o 100 compañías en la misma página.
                        Al costado derecho se encuentra el campo buscar, el cual puede usarlo para buscar una compañía por cualquier campo, ya sea nombre, teléfono, correo, usuario, etc. sin necesidad de especificar el campo de busqueda.
                        Caso tal de que en la tabla vea el texto de No hay datos disponibles en la tabla es debido a que no hay compañías creadas.</p>
                    <p>En la parte superior se encuentra dos botones, uno es <a class="btn btn-small btn-info" ><i class="fa fa-list"></i> Listar todos</a> el cual puede pulsarlo para actualizar la tabla y listar nuevamente las compañías.</p>
                    <p>El botón <a class="btn btn-small btn-info" ><i class="fa fa-plus"></i> Agregar compañía</a>, puede pulsarlo para dirigirse a la vista en la cual se encuentran los campos necesarios para agregar una nueva compañía.</p>
                    <p> <a href="javascript:abrirCompanias();" target="_blank">Ver Compañias</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#collapse112"><i class="fa fa-arrows-v"></i> Agregar Compañía?</a>
                </h4>
            </div>
            <div id="collapse112" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la vista de agregar una nueva compañía encuentra los campos Nombre de la compañía, NIT, Teléfono y correo electrónico en los cuales puede ingresar los datos manualmente.</p>
                    <p> El campo usuario, el cual hace referencia a cual de sus clientes es el representante de esta compañía, es una lista desplegable en la cual se muestran los diferentes <a href="javascript:mostrarCrearUsuario();" target="_blank">clientes que posee</a>. Al momento de agregar una nueva compañía debe serciorarse de que el usuario al cual esta pertenece ya ha sido creado o de lo contrario no podrá hacerlo.</p>
                    <P>En la parte inferior de la vista se encuentran los botones <input class="btn btn-primary" type="submit" value="Crear compañía!"> con el cuál creará la compañía y esta será cargada al a base de datos y el botón <a class="btn btn-small btn-danger">Cancelar</a> con el cual cancelará la creación de una nueva compañía.</P>
                    <p><a href="javascript:abrirCompanias();" target="_blank">Agregar Una Nueva Compañia</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#collapse113"><i class="fa fa-arrows-v"></i> Ver Detalle De Compañia</a>
                </h4>
            </div>
            <div id="collapse113" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de compañías, al costado derecho de esta se encuentra el campo Opciones, en cada compañía puede encontrar el botón <a class="btn btn-small btn-success"  target="_blank"> <i class="fa fa-search"></i></a> con el cuál podrá ver en detalle todos los datos de la compañía seleccionada.</p>
                </div>
            </div>
        </div>
      
           <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#collapse115"><i class="fa fa-arrows-v"></i> Editar Compañias</a>
                </h4>
            </div>
            <div id="collapse115" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de compañías, al costado derecho de esta se encuentra el campo Opciones, en cada compañía puede encontrar el botón <a class="btn btn-small btn-info" href="javascript:abrirCompanias();" target="_blank"><i class="fa fa-pencil"></i></a> al pulsar este botón será dirigido a la vista de editar la compañía seleccionada. Una vez allí, puede editar los datos necesarios y pulsar el botón <input class="btn btn-primary" type="submit" value="Editar!"> para finalizar la edición y guardar los cambios, o pulsar el botón <a class="btn btn-small btn-danger" href="javascript:abrirCompanias();">Cancelar</a> para cancelar la edición.</p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#collapse116"><i class="fa fa-arrows-v"></i> Eliminar Compañias</a>
                </h4>
            </div>
            <div id="collapse116" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la tabla de compañías, al costado derecho de esta se encuentra el campo Opciones, en cada compañía puede encontrar el botón <a class="btn btn-small btn-danger" href="javascript:abrirCompanias();" target="_blank"> <i class="fa fa-trash-o"></i></a> con el cual podrá eliminar la compañía seleccionanda.
                        Al pulsar este botón, arriba de el se despliega una ventana de confirmación en la cual seleccionará SI para eliminar la compañía o NO para cancelar la acción</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
        </div>
        <div class="col-md-8 well admin-content" id="productos">
           <div class="bs-example">
    <div class="panel-group" id="accordion2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col"><i class="fa fa-arrows-v"></i> Modulo Productos?</a>
                </h4>
            </div>
            <div id="col" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>En la vista de productos podrá encontrar un listado con los diferentes productos que ofrece a sus clientes. Estos productos se encuentran organizados en una tabla por los campos de nombre del producto, Descripción del producto y proveedor al cual compra el producto.</p>
                    <p>Al costado derecho del nombre de cada campo de la tabla, encontrará unas flechas hacia arriba y abajo, al pulsar estas, los productos se organizan en orden ascendente respecto al campo donde pulsó las flechas. Al volver a pulsar las flechas la tabla volverá a listarse como lo estaba inicialmente.</p>
                    <p>Arriba de esta tabla el campo de selección de la cantidad de productos que desea ver en la página (Mostrar entradas), en la cual puede seleccionar ver 10, 25, 50 o 100 productos en la misma página.
    Al costado derecho se encuentra el campo buscar, el cual puede usarlo para buscar un producto por cualquier campo, ya sea nombre, teléfono, correo, usuario, etc. sin necesidad de especificar el campo de busqueda.
    Caso tal de que en la tabla vea el texto de No hay datos disponibles en la tabla es debido a que no hay productos creados. En la parte superior se encuentra dos botones, uno es <a class="btn btn-small btn-info"><i class="fa fa-list"></i> Listar todos</a> el cual puede pulsarlo para actualizar la tabla y listar nuevamente los productos. y el otro botón es <a class="btn btn-small btn-info"><i class="fa fa-plus"></i> Agregar producto</a> que lo dirigirá a la vista para agregar un nuevo producto</p>
                    <p><a href="javascript:abrirProductos();" target="_blank">Ver productos</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co2"><i class="fa fa-arrows-v"></i> Agregar Productos</a>
                </h4>
            </div>
            <div id="co2" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la vista de agregar un nuevo producto encuentran los campos Nombre del producto, Proveedor del producto y descripción del producto en los cuales puede ingresar los datos manualmente. El campo proveedor del producto, el cual hace referencia a cual de sus proveedores es quien le vende este producto es una lista desplegable en la cual se muestran los diferentes proveedores que posee. Al momento de agregar un nuevo producto, debe serciorarse de que el proveedor al cual este pertenece ya ha sido creado o de lo contrario no podrá hacerlo.</p>
                    <p>Finalmente, abajo de estos campos se encuentran los botones <input class="btn btn-primary" type="submit" value="Crear producto!"> el cual al pulsarlo crea el producto, y el botón <a class="btn btn-small btn-danger">Cancelar</a> el cual cancela la acción y lo devuelve a la vista anterior.</p>
                    <p><a href="javascript:abrirProductos();" target="_blank">Agregar un nuevo producto</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co3"><i class="fa fa-arrows-v"></i> Ver Detalle Del Producto</a>
                </h4>
            </div>
            <div id="co3" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho de la tabla de productos se encuentra el campo Opciones en el cuál puede encontrar botón <a class="btn btn-small btn-success" target="_blank"> <i class="fa fa-search"></i></a> al pulsar este botón será dirigido a la vista en detalle del producto</p>
                </div>
            </div>
        </div>
      
           <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co4"><i class="fa fa-arrows-v"></i> Editar Productos</a>
                </h4>
            </div>
            <div id="co4" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho de la tabla de productos se encuentra el campo Opciones en el cuál puede encontrar botón <a class="btn btn-small btn-info"  target="_blank"><i class="fa fa-pencil"></i></a> al pulsar este fotón será dirigido a la vista de editar producto donde puede realizar los cambios que desee y finalmente pulsar el botón <input class="btn btn-primary" type="submit" value="Editar producto!"> para guardar los cambios, o pulsar <a class="btn btn-small btn-danger">Cancelar</a> para deshacer la edición.</p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co5"><i class="fa fa-arrows-v"></i> Eliminar Productos</a>
                </h4>
            </div>
            <div id="co5" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho de la tabla de productos se encuentra el campo Opciones en el cuál puede encontrar botón  <a class="btn btn-small btn-danger"  target="_blank"> <i class="fa fa-trash-o"></i></a> con el cuál podrá eliminar el producto seleccionado.
                     Al pulsar este botón, arriba de el se despliega una ventana de confirmación en la cual seleccionará SI para eliminar la compañía o NO para cancelar la acción</p>
                </div>
            </div>
        </div>

    </div>
</div>
        </div>
        <div class="col-md-8 well admin-content" id="navieras">
               <div class="bs-example">
    <div class="panel-group" id="accordion2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col2"><i class="fa fa-arrows-v"></i> Modulo Navieras</a>
                </h4>
            </div>
            <div id="col2" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>En la vista de navieras podrá encontrar los datos de las navieras con las cuales transporta los diferentes pedidos, estas están organizadas en una tabla por los campos Nombre de la naviera, nombre del contacto de la naviera, telefono del contacto, dirección del contacto, URL (dirección web) del tracking de la naviera y finalmente un campo de opciones que puede realizar sobre estas</p>
                    <p>Al costado derecho del nombre de cada campo de la tabla, encontrará unas flechas hacia arriba y abajo, al pulsar estas, los navieras se organizan en orden ascendente respecto al campo donde pulsó las flechas. Al volver a pulsar las flechas la tabla volverá a listarse como lo estaba inicialmente.</p>
                    <p>Arriba de esta tabla el campo de selección de la cantidad de navieras que desea ver en la página (Mostrar entradas), en la cual puede seleccionar ver 10, 25, 50 o 100 navieras en la misma página.
    Al costado derecho se encuentra el campo buscar, el cual puede usarlo para buscar una naviera por cualquier campo, ya sea nombre de la naviera, nombre del contacto, teléfono de contacto, correo de contacto, etc. sin necesidad de especificar el campo de busqueda.</p>
                    <p>Caso tal de que en la tabla vea el texto de No hay datos disponibles en la tabla es debido a que no hay navieras creadas.</p>
                    <p>En la parte superior se encuentra dos botones, uno es <a class="btn btn-small btn-info"><i class="fa fa-list"></i> Listar todos</a> el cual puede pulsarlo para actualizar la tabla y listar nuevamente las navieras.</p>
                    <p>y el botón <a class="btn btn-small btn-info" ><i class="fa fa-plus"></i> Agregar naviera</a>, puede pulsarlo para dirigirse a la vista en la cual se encuentran los campos necesarios para agregar una nueva naviera.</p>
                    <p><a href="javascript:abrirNavieras();" target="_blank">Ver Navieras</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co13"><i class="fa fa-arrows-v"></i> Agregar Naviera</a>
                </h4>
            </div>
            <div id="co13" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la vista de agregar una nueva naviera encuentra los campos Nombre de la naviera, nombre del contacto, Teléfono del contacto, correo electrónico, El campo URL del tracking, el cual hace referencia a la dirección de la página web del trackin de la naviera, en los cuales puede ingresar los datos manualmente. </p>
                    <p>Abajo de estos campos se encuentran los botones <input class="btn btn-primary" type="submit" value="Crear naviera!"> con el cuál creará la naviera en la base de datos, y el botón <a class="btn btn-small btn-danger">Cancelar</a> que cancelará la creación de la naviera y lo dirigirá a la vista anterior.</p>
                    <p><a href="javascript:abrirNavieras();" target="_blank">Agregar una nueva naviera</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co14"><i class="fa fa-arrows-v"></i> Ver Detalle De la Naviera</a>
                </h4>
            </div>
            <div id="co14" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho en la tabla Navieras, encontrará el campo Opciones, donde puede ver el botón <a class="btn btn-small btn-success"  target="_blank"> <i class="fa fa-search"></i></a>, el cuál, al pulsarlo, lo dirige a la vista en detalle del producto seleecionado.</p>
                </div>
            </div>
        </div>
      
           <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co15"><i class="fa fa-arrows-v"></i> Editar Navieras</a>
                </h4>
            </div>
            <div id="co15" class="panel-collapse collapse">
                <div class="panel-body">
                    <p> Al costado derecho en la tabla Navieras, encontrará el campo Opciones, donde puede ver el botón<a class="btn btn-small btn-info"  target="_blank"><i class="fa fa-pencil"></i></a>el cuál, al pulsarlo, lo dirigirá a la vista de edición de la naviera seleccionada.
                        En esta vista, encontrará los botones <input class="btn btn-primary" type="submit" value="Editar naviera!"> el cual puede pulsarlo para grabar los cambios hechos sobre la naviera, o el botón <a class="btn btn-small btn-danger">Cancelar</a>  para cancelar la edición y dirigirse a la vista anterior.</p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co16"><i class="fa fa-arrows-v"></i> Eliminar Navieras</a>
                </h4>
            </div>
            <div id="co16" class="panel-collapse collapse">
                <div class="panel-body">
                    <p> Al costado derecho en la tabla Navieras, encontrará el campo Opciones, donde puede ver el botón <a class="btn btn-small btn-danger" target="_blank"> <i class="fa fa-trash-o"></i></a> el cuál le permitirá eliminar una naviera.
                    Al pulsar este botón, arriba de el se despliega una ventana de confirmación en la cual seleccionará SI para eliminar la compañía o NO para cancelar la acción</p>
                </div>
            </div>
        </div>

    </div>
</div>
        </div>
        <div class="col-md-8 well admin-content" id="proveedores">
             <div class="bs-example">
    <div class="panel-group" id="accordion2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col23"><i class="fa fa-arrows-v"></i> Modulo Proveedores</a>
                </h4>
            </div>
            <div id="col23" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>En la vista de proveedores podrá encontrar un listado de los diferentes proveedores a los cuales compra productos.
                        Estos proveedores se encuentran organizados en una tabla con los campos de Nombre del proveedor, nombre del contacto del proveedor, teléfono, correo electrónico y dirección.</p>
                    <p>Al costado derecho del nombre de cada campo de la tabla, encontrará unas flechas hacia arriba y abajo, al pulsar estas, los proveedores se organizan en orden ascendente respecto al campo donde pulsó las flechas. Al volver a pulsar las flechas la tabla volverá a listarse como lo estaba inicialmente.</p>
                    <p>Arriba de esta tabla el campo de selección de la cantidad de proveedores que desea ver en la página (Mostrar entradas), en la cual puede seleccionar ver 10, 25, 50 o 100 proveedores en la misma página.</p>
                    <p>Al costado derecho de arriba de la tabla se encuentra el campo buscar, el cual puede usarlo para buscar un proveedor por cualquier campo, ya sea nombre del proveedor, nombre del contacto, teléfono o correo, sin necesidad de especificar el campo de busqueda.</p>
                    <p>Caso tal de que en la tabla vea el texto de No hay datos disponibles en la tabla es debido a que no se han creado proveedores.</p>
                    <p>En la parte superior se encuentra dos botones, uno es <a class="btn btn-small btn-info"><i class="fa fa-list"></i> Listar todos</a> el cual puede pulsarlo para actualizar la tabla y listar nuevamente los proveedores.</p>
                    <p>El botón <a class="btn btn-small btn-info"><i class="fa fa-plus"></i> Agregar proveedor</a>, puede pulsarlo para dirigirse a la vista en la cual se encuentran los campos necesarios para agregar un nuevo proveedor.</p>
                    <p><a href="javascript:abrirProveedores();" target="_blank">Ver Proveedores</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col24"><i class="fa fa-arrows-v"></i> Agregar Proveedor</a>
                </h4>
            </div>
            <div id="col24" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al pulsar el botón Agregar proveedor, este lo dirige a la vista con los campos   nombre del proveedor, nombre del contacto, telefono del contacto, dirección del proveedor y correo electrónico del contacto donde podrá ingresar los datos manualmente y posterior a eso pulsar el boton <input class="btn btn-primary" type="submit" value="Crear proveedor!"> para crear uno nuevo.</p>
                    <p>o pulsar el botón <a class="btn btn-small btn-danger" href="javascript:abrirProveedores();">Cancelar</a> para cancelar la acción y volver a la vista anterior.</p>
                    <p><a href="javascript:abrirProveedores();" target="_blank">Agregar un nuevo proveedor</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col25"><i class="fa fa-arrows-v"></i> Ver detalle de Proveedores</a>
                </h4>
            </div>
            <div id="col25" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho de la tabla de proveedores encontrará el campo Opciones donde podrá encontrar el botón <a class="btn btn-small btn-success"  target="_blank"> <i class="fa fa-search"></i></a> el cuál lo dirigirá a la vista en detalle de los datos del proveedor seleccionado</p>
                </div>
            </div>
        </div>
      
           <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col26"><i class="fa fa-arrows-v"></i> Editar Proveedores</a>
                </h4>
            </div>
            <div id="col26" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho de la tabla de proveedores encontrará el campo Opciones donde podrá encontrar el botón  <a class="btn btn-small btn-info" target="_blank"><i class="fa fa-pencil"></i></a> el cuál lo dirigirá a la vista de editar proveedor, donde podrá editar los datos del proveedor seleccionado.</p>
                    <p>Abajo de los campos se encuentra el botón <input class="btn btn-primary" type="submit" value="Editar proveedor!"> con el cuál guardará los cambios realizados en el proveedor</p>
                    <p>También se encuentra el botón <a class="btn btn-small btn-danger">Cancelar</a> que cancelará los cambios efectuados y lo dirigirá a la vista anterior.</p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col27"><i class="fa fa-arrows-v"></i> Eliminar Proveedores</a>
                </h4>
            </div>
            <div id="col27" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho de la tabla de proveedores encontrará el campo Opciones donde podrá encontrar el botón  <a class="btn btn-small btn-danger" target="_blank"> <i class="fa fa-trash-o"></i></a> con el cuál podrá eliminar el proveedor seleccionado. </p>
                    <p>Al pulsar este botón, arriba de el se despliega una ventana de confirmación en la cual seleccionará SI para eliminar la compañía o NO para cancelar la acción</p>
                    </div>
            </div>
        </div>

    </div>
</div>
        </div>
        <div class="col-md-8 well admin-content" id="historial">
             <div class="bs-example">
    <div class="panel-group" id="accordion2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#colla1"><i class="fa fa-arrows-v"></i> Modulo Historial Pedidos</a>
                </h4>
            </div>
            <div id="colla1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>En la vista de pedidos, podrá observar un listado con todos los pedidos que ya se han realizado y entregado a los diferentes clientes. estos se encuentran listados en una tabla que cuenta con los campos de producto, proveedor del producto Naviera con la que contrata el servicio de transporte, containers en los cuales viaja el producto, número de guía de envío de los documentos pertinentes al pedido, número de reserva del pedido, buque en el cual se transporta, la fecha de carga del container y la fecha de desembarque de este, además de un campo inicial que indica si el pedido es de tipo importación o exportación.</p>
                    <p>Al costado derecho del nombre de cada campo de la tabla, encontrará unas flechas hacia arriba y abajo, al pulsar estas, los pedidos se organizan en orden ascendente respecto al campo donde pulsó las flechas. Al volver a pulsar las flechas la tabla volverá a listarse como lo estaba inicialmente. </p>
                    <p>Arriba de esta tabla el campo de selección de la cantidad de pedidos que desea ver en la página (Mostrar entradas), en la cual puede seleccionar ver 10, 25, 50 o 100 pedidos en la misma página.
                        Al costado derecho se encuentra el campo buscar, el cual puede usarlo para buscar un pedido por cualquier campo, ya sea producto, proveedor, naviera, container, etc. sin necesidad de especificar el campo de busqueda.
                        en la parte superior de la página encontrará el botón Mostrar pedidos activos que lo dirigirá a la vista de pedidos que se encuentran en estado de tramite y no han sido entregados.</p>
                    <p><a href="javascript:abrirHistorialPedidos();" target="_blank">Ver Pedidos</a></p>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#colla12"><i class="fa fa-arrows-v"></i> Ver Detalle Del Pedido</a>
                </h4>
            </div>
            <div id="colla12" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho en la tabla de Pedidos se encuentra el campo Opciones, en la cuál puede encontrar el botón <a class="btn btn-small btn-success" target="_blank"> <i class="fa fa-search"></i></a>, al pulsar este botón lo dirigirá a la vista en detalle del pedido seleccionado.</p>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
       <div class="col-md-8 well admin-content" id="usuarios">
            <div class="bs-example">
    <div class="panel-group" id="accordion2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#coll"><i class="fa fa-arrows-v"></i> Modulo Usuarios</a>
                </h4>
            </div>
            <div id="coll" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>En la vista de usuarios, podrá encontrar el listado con los diferentes usuarios que cuenta el portal, estos usuarios puedentener la calidad de Administrador, Digitador o cliente y se encuentan ordenados en una tabla con los campos de Tipo de cliente, nombre, teléfono, correo, dirección, ciudad, país, estado(activo o inactivo), y un campo opciones al costado derecho de cada usuario que permite ver todos sus datos en detalle, editarlos o eliminar el cliente como tal.</p>
                    <p>Al costado derecho del nombre de cada campo de la tabla, encontrará unas flechas hacia arriba y abajo, al pulsar estas, los usuarios se organizan en orden ascendente respecto al campo donde pulsó las flechas. Al volver a pulsar las flechas la tabla volverá a listarse como lo estaba inicialmente.</p>
                    <p>Arriba de esta tabla el campo de selección de la cantidad de usuarios que desea ver en la página (Mostrar entradas), en la cual puede seleccionar ver 10, 25, 50 o 100 usuarios en la misma página.</p>
                    <p>Al costado derecho se encuentra el campo buscar, el cual puede usarlo para buscar un usuario por cualquier campo, ya sea nombre del usuario, teléfono, correo, etc., sin necesidad de especificar el campo de busqueda.
                    Caso tal de que en la tabla vea el texto muestre que No hay datos disponibles en la tabla es debido a que no se han creado usuarios.</p>
                    <p>En la parte superior se encuentra dos botones, uno es <a class="btn btn-small btn-info"><i class="fa fa-list"></i> Listar todos</a> el cual puede pulsarlo para actualizar la tabla y listar nuevamente los usuarios.</p>
                    <p>El botón <a class="btn btn-small btn-info"><i class="fa fa-plus"></i> Agregar usuario</a>, puede pulsarlo para dirigirse a la vista en la cual se encuentran los campos necesarios para agregar un nuevo usuario.</p>
                    <p><a href="javascript:abrirUsuarios();" target="_blank">Ver Usuarios</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col1"><i class="fa fa-arrows-v"></i> Agregar Usuarios</a>
                </h4>
            </div>
            <div id="col1" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>En la vista de agregar usuarios, puede ingresar los datos correspondientes a  la persona que desea agregar a la plataforma.</p>
                    <p>El campo Tipo de usuario es una lista desplegable donde encuentra Administrador, Digitador o Cliente, dependiendo de la persona que se encuentre registrando usted decidirá el tipo de usuairo que esta será</p>
                    <p>Los campos de selección País de residencia y Ciudad de residencia son listas desplegables de las cuales puede seleccionar el dato necesario.</p>
                    <p>Finalmente, abajo de estos campos se encuentran los botones <input class="btn btn-primary" type="submit" value="Crear usuario!">, con el cuál podrá crear el nuevo usuario</p>
                    <p>y el botón <a class="btn btn-small btn-danger" href="javascript:abrirUsuarios();">Cancelar</a> para deshacer la acción y lo llevará a la vista anterior.</p>
                    <p> <a href="javascript:abrirUsuarios();" target="_blank">Ver usuarios</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#coll2"><i class="fa fa-arrows-v"></i> Ver Detalle De la Usuario</a>
                </h4>
            </div>
            <div id="coll2" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho de la tabla de usuarios, se encuentra el campo Opciones, donde podrá encontrar el botón <a class="btn btn-small btn-success"  target="_blank"> <i class="fa fa-search"></i></a> este, al pulsarlo, lo dirigirá a la vista en detalle de los datos del usuario</p>
                </div>
            </div>
        </div>
      
           <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col3"><i class="fa fa-arrows-v"></i> Editar Usuarios</a>
                </h4>
            </div>
            <div id="col3" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Al costado derecho de la tabla de usuarios, se encuentra el campo Opciones, donde podrá encontrar el botón  <a class="btn btn-small btn-info"  target="_blank"><i class="fa fa-pencil"></i></a>, el cuál lo dirigirla a la vista de editar usuario, donde podrá realizar los cambios deseados sobre los datos del usuario seleccionado.</p>
                    <p>En la parte inferior de la vista, se encuentan los botones <input class="btn btn-primary" type="submit" value="Editar!">, con el cuál guardará los cambios realizados sobre el usuario seleccionado.</p>
                    <p>y el botón <a class="btn btn-small btn-danger">Cancelar</a> para deshacer los cambios efecutados sobre el usuario y volver a la vista anterior</p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col4"><i class="fa fa-arrows-v"></i> Eliminar Usuarios</a>
                </h4>
            </div>
            <div id="col4" class="panel-collapse collapse">
                <div class="panel-body">
                    <p> Al costado derecho de la tabla de usuarios, se encuentra el campo Opciones, donde podrá encontrar el botón <a class="btn btn-small btn-danger"  target="_blank"> <i class="fa fa-trash-o"></i></a> con el cuál podrá eliminar el usuario seleccionado.</p>
                    <p>Al pulsar este botón, arriba de el se despliega una ventana de confirmación en la cual seleccionará SI para eliminar la compañía o NO para cancelar la acción</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
        </div>
        
    </div> <br>
</div></div>
<script type="text/javascript">
 $('#menu-vertical li').removeClass();
  $('#menu-vertical').find('a:contains("Ayuda")').parent().addClass("active");

$(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
});
</script>

   