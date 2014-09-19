
@extends('layouts.default')

@section('content')

<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>
body
 { padding-bottom:40px; padding-top:40px; }
</style>
</head>
<body class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2">
<div class="page-header">

	<h1>Edit {{ $tasks->text }}</h1>
</div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($tasks, array('route' => array('tasks.update', $tasks->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Task') }}
		{{ Form::text('text', null, array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Edit the Task', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>