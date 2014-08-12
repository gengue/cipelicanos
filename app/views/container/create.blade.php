<div class="container-fluid">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('container') }}">Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('container') }}">View All</a></li>
            <li><a href="{{ URL::to('container/create') }}">Create</a>
        </ul>
    </nav>

    <h1>Create</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'container')) }}

    <div class="form-group">
        {{ Form::label('numero_container', 'Numero de Container') }}
        {{ Form::text('numero_container', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Crear container!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>