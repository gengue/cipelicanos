<div class="container-fluid">

    <nav class="navbar navbar-inverse">                
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('guias') }}">Ver todas las guias</a></li>
            <li><a href="{{ URL::to('guias/create') }}">Crear Guia</a>
        </ul>
    </nav>

    <h1>Todas las guias</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Numero de guia</td>
                    <td>Empresa de envio</td>
                    <td>Documento</td>
                    <td>Opciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($guias as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->numero_guia }}</td>
                    <td>{{ $value->empresa_envio }}</td>
                    <td><a href="{{ URL::to('download/'.$value->id)}}"> <span class="glyphicon glyphicon-floppy-save"></span>  {{ $value->numero_guia }}</a></td>

                    <td> 
                        <a class="btn btn-small btn-info" href="{{ URL::to('guias/' . $value->id) }}"><i class="glyphicon glyphicon-search"></i></a>
                        <a class="btn btn-small btn-success" href="{{ URL::to('guias/' . $value->id . '/edit') }}"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a class="btn btn-small btn-danger" onclick="eliminar({{$value->id}})" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script>

                                    function eliminar(id){
                                    $.ajax({
                                    url: "/guias/" + id,
                                            type: "DELETE",
                                            success: function(data, textStatus, jqXHR) {
                                            location.href = '/guias';
                                            }
                                    });
                                    }
    </script>
</div>