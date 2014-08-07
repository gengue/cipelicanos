<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>Look! I'm CRUDding</title>
        {{ HTML::style('css/bootstrap.css') }}
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('container') }}">Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('container') }}">View All</a></li>
                    <li><a href="{{ URL::to('container/create') }}">Create</a>
                </ul>
            </nav>

            <h1>All</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($container as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->numero_container }}</td>
                        <!-- we will also add show, edit, and delete buttons -->
                        <td>                            
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('container/' . $value->id) }}">Show</a>

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('container/' . $value->id . '/edit') }}">Edit</a>
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            {{ Form::open(array('url' => 'container/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>