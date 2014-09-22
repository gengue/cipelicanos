<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-info-circle"></i> Centro de Ayuda <small>Hola {{ ' '.Auth::user()->nombre;}} aqui encontraras toda la informacion acerca del sistema </small>
            </h1>
            
        </div>
    </div> 
    
    
     <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li class="active"><a href="#" data-target-id="Pedidos"><i class="fa fa-fw fa-shopping-cart"></i>Pedidos</a></li>
                <li><a href="#" data-target-id="clientes"><i class="fa fa-fw fa-money"></i>Clientes</a></li>
                <li><a href="#" data-target-id="companias"><i class="fa fa-fw fa-university"></i>Compa&ntilde;&iacute;as</a></li>
                <li><a href="#" data-target-id="productos"><i class="fa fa-fw fa-gift"></i>Productos</a></li>
                <li><a href="#" data-target-id="navieras"><i class="fa fa-fw fa-anchor"></i>Navieras</a></li>
                <li><a href="#" data-target-id="proveedores"><i class="fa fa-fw fa-suitcase"></i>Proveedores</a></li>
                <li><a href="#" data-target-id="historial"><i class="fa fa-fw fa-calendar"></i>Historial de Pedidos</a></li>
                <li><a href="#" data-target-id="usuarios"><i class="fa fa-fw fa-users"></i>Usuarios</a></li>
               
            </ul>
        </div>
        <div class="col-md-8 well admin-content"  id="Pedidos">
            <p>
      AYuda pedidos
</p> 
<p>
    
</p> 
            
        </div>
        <div class="col-md-8 well admin-content" id="clientes">
             AYuda clientes
        </div>
        <div class="col-md-8 well admin-content" id="companias">
             AYuda compañias
        </div>
        <div class="col-md-8 well admin-content" id="productos">
            ayuda productos
        </div>
        <div class="col-md-8 well admin-content" id="navieras">
             AYuda navieras
        </div>
        <div class="col-md-8 well admin-content" id="proveedores">
             AYuda proveedores
        </div>
        <div class="col-md-8 well admin-content" id="historial">
             AYuda ayuda historial
        </div>
        <div class="col-md-8 well admin-content" id="usuarios">
             AYuda usuarios
        </div>
        
    </div><br>
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

