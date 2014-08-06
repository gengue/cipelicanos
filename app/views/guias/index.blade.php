<!DOCTYPE html>
<html>
    <head>
        <title>C.I Pelicanos Admin - Guias</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

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
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Numero de guia</td>
                        <td>Empresa de envio</td>
                        <td>Documento</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guias as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->numero_guia }}</td>
                        <td>{{ $value->empresa_envio }}</td>
                        <td><a href="{{ URL::to('download/'.$value->id)}}">Descargar {{ $value->numero_guia }}</a></td>

                        <!-- we will also add show, edit, and delete buttons -->
                        <td>                            
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('guias/' . $value->id) }}">Detalle</a>

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('guias/' . $value->id . '/edit') }}">Editar</a>
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            {{ Form::open(array('url' => 'guias/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>