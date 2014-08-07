<!-- app/views/nerds/show.blade.php -->

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

<h1>Showing {{ $container->numero_container }}</h1>

	<div class="jumbotron text-center">
<!--		<h2>{{ $container->numero_container }}</h2>-->
		<p>
			<strong>Numero de Container:</strong> {{ $container->numero_container }}<br>
		</p>
	</div>

</div>
</body>
</html>