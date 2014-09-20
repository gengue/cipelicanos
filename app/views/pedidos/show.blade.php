<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <!--i></i-->Pedido <small>Mostrar Pedido</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> &Uacute;ltima sesi&oacute;n:{{ ' '.Auth::user()->ultimo_acceso;}}
                </li>
            </ol>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $pedido->producto->nombre }}</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>


                    <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information" id="usuariosTbl">

                            <tbody>

                                <tr>
                                    <td>Nombre del Producto :</td>
                                    <td>{{ $pedido->producto->nombre }}</td>
                                </tr>
                                <tr>
                                    <td>Proveedor:</td>
                                    <td><a href="javascript:mostrarDetalleProveedores({{$pedido->producto->proveedor->id}});">{{ $pedido->producto->proveedor->nombre }}</a></td>
                                </tr>
                                <tr>
                                    <td>Naviera:</td>
                                    <td><a href="javascript:mostrarDetalleNaviera({{$pedido->naviera->id }});">{{ $pedido->naviera->nombre  }}</a></td>
                                </tr>
                                <tr>
                                    <td>Guias:</td>
                                    <td>
                                    @foreach($pedido->guias as $llave => $guia) 
                                    {{ $guia->numero_guia. " - ".$guia->empresa_envio}},
                                    @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Compañia:</td>
                                    <td>
                                        {{ $pedido->compania->nombre }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Usuario:</td>
                                    <td>
                                        {{ $pedido->compania->cliente->nombre }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tipo:</td>
                                    <td>
                                        {{ $pedido->tipo}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Numero de reserva:</td>
                                    <td>{{ $pedido->numero_reserva }}</td>
                                </tr>
                                <tr>
                                    <td>Buque:</td>
                                    <td>{{ $pedido->buque."-".$pedido->numero_viaje }}</td>
                                </tr>
                                <tr>
                                    <td>Fecha carga:</td>
                                    <td>{{ $pedido->fecha_carga}}</td>
                                </tr>
                                <tr>
                                    <td>Fecha de Abordaje:</td>
                                    <td>{{ $pedido->fecha_abordaje }}</td>
                                </tr>
                                <tr>
                                    <td>Fecha de entrega:</td>
                                    <td>{{ $pedido->fecha_entrega }}</td>
                                </tr>
                                <tr>
                                    <td>Numero de cotainers:</td>
                                    <td>@foreach($pedido->containers as $llave => $container) 

                                    <a href="{{ $pedido->naviera->url_seguimiento . $container->numero_container }}" target="_blank">
                                        {{ $container->numero_container }}
                                    </a>
                                    
                                    <br>
                                    @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a class="btn btn-small btn-info" href="javascript:abrirCompanias();"><i class="fa fa-arrow-left"></i> Atras</a>
            </div>

        </div>
    </div>
</div>




