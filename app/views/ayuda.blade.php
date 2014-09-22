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
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirDashboard();" target="_blank">Inicio</a></p>
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
                    <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="#" target="_blank">Learn more.</a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="javascript:abrirPerfil();" target="_blank">Mi perfil.</a></p>
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
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirPedidos();" target="_blank">Ver Pedidos</a></p>
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
                    <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="javascript:mostrarCrearPedido();" target="_blank">Ir a Agregar Un Nuevo Pedido</a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-success" href="javascript:abrirPedidos();" target="_blank"> <i class="fa fa-search"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-primary" href="javascript:abrirPedidos();" target="_blank"> <i class="fa fa-check"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-info" href="javascript:abrirPedidos();" target="_blank"><i class="fa fa-pencil"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirPedidos();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7"><i class="fa fa-arrows-v"></i> Alguna otra huevonada q se te ocurra</a>
                </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirPedidos();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
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
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirClientes();" target="_blank">Ver Clientes</a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-success" href="javascript:abrirClientes();" target="_blank"> <i class="fa fa-search"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirClientes();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse17"><i class="fa fa-arrows-v"></i> Alguna otra huevonada q se te ocurra</a>
                </h4>
            </div>
            <div id="collapse17" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirPedidos();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
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
                    <a data-toggle="collapse" data-parent="#accordion4" href="#collapse111"><i class="fa fa-arrows-v"></i> Modulo Compañias?</a>
                </h4>
            </div>
            <div id="collapse111" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirCompanias();" target="_blank">Ver Compañias</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#collapse112"><i class="fa fa-arrows-v"></i> Agregar Compañia?</a>
                </h4>
            </div>
            <div id="collapse112" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="javascript:abrirCompanias();" target="_blank">Agregar Una Nueva Compañia</a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-success" href="javascript:abrirCompanias();" target="_blank"> <i class="fa fa-search"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-info" href="javascript:abrirCompanias();" target="_blank"><i class="fa fa-pencil"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirCompanias();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#collapse117"><i class="fa fa-arrows-v"></i> Alguna otra huevonada q se te ocurra</a>
                </h4>
            </div>
            <div id="collapse117" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirCompanias();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
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
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirProductos();" target="_blank">Ver Compañias</a></p>
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
                    <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="javascript:abrirProductos();" target="_blank">Agregar Una Nueva Compañia</a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-success" href="javascript:abrirProductos();" target="_blank"> <i class="fa fa-search"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-info" href="javascript:abrirProductos();" target="_blank"><i class="fa fa-pencil"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirProductos();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co6"><i class="fa fa-arrows-v"></i> Alguna otra huevonada q se te ocurra</a>
                </h4>
            </div>
            <div id="co6" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirProductos();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
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
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirNavieras();" target="_blank">Ver Navieras</a></p>
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
                    <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="javascript:abrirNavieras();" target="_blank">Agregar Una Nueva Naviera</a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-success" href="javascript:abrirNavieras();" target="_blank"> <i class="fa fa-search"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-info" href="javascript:abrirNavieras();" target="_blank"><i class="fa fa-pencil"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirNavieras();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#co17"><i class="fa fa-arrows-v"></i> Alguna otra huevonada q se te ocurra</a>
                </h4>
            </div>
            <div id="co17" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirNavieras();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
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
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirProveedores();" target="_blank">Ver Proveedores</a></p>
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
                    <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="javascript:abrirProveedores();" target="_blank">Agregar Una Nueva Naviera</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col25"><i class="fa fa-arrows-v"></i> Ver Detalle De Proveedores</a>
                </h4>
            </div>
            <div id="col25" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-success" href="javascript:abrirProveedores();" target="_blank"> <i class="fa fa-search"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-info" href="javascript:abrirProveedores();" target="_blank"><i class="fa fa-pencil"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirProveedores();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col28"><i class="fa fa-arrows-v"></i> Alguna otra huevonada q se te ocurra</a>
                </h4>
            </div>
            <div id="col28" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirProveedores();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
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
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirHistorialPedidos();" target="_blank">Ver Pedidos</a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-success" href="javascript:abrirHistorialPedidos();" target="_blank"> <i class="fa fa-search"></i></a></p>
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
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="javascript:abrirUsuarios();" target="_blank">Ver Navieras</a></p>
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
                    <p>Twitter Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="javascript:abrirUsuarios();" target="_blank">Agregar Una Nueva Naviera</a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-success" href="javascript:abrirUsuarios();" target="_blank"> <i class="fa fa-search"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-info" href="javascript:abrirUsuarios();" target="_blank"><i class="fa fa-pencil"></i></a></p>
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
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirUsuarios();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#col5"><i class="fa fa-arrows-v"></i> Alguna otra huevonada q se te ocurra</a>
                </h4>
            </div>
            <div id="col5" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such 
                        as colors, backgrounds, 
                        fonts etc. <a class="btn btn-small btn-danger" href="javascript:abrirUsuarios();" target="_blank"> <i class="fa fa-trash-o"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
        
    </div> <br>
</div></div>
<script type="text/javascript">
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
});</script>

