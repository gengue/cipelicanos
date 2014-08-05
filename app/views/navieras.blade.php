<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>Look! I'm CRUDding</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('naviera') }}">Nerd Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('naviera') }}">View All Nerds</a></li>
                    <li><a href="{{ URL::to('naviera/create') }}">Create a Nerd</a>
                </ul>
            </nav>

            <h1>All the Nerds</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Nombre de Contacto</td>
                        <td>Telefono</td>
                        <td>Direccion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($navieras as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->nombre }}</td>
                        <td>{{ $value->nombre_contacto }}</td>
                        <td>{{ $value->telefono }}</td>
                        <td>{{ $value->direccion }}</td>

                        <!-- we will also add show, edit, and delete buttons -->
                        <td>                            
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('naviera/' . $value->id) }}">Show this Nerd</a>

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('naviera/' . $value->id . '/edit') }}">Edit this Nerd</a>
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            {{ Form::open(array('url' => 'naviera/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>