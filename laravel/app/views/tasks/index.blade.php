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
	<div class="pull-right">
		{{ link_to_route('tasks.create', 'Create task') }}
	</div>
	<h1>Todo Web Application </h1>
</div>

<div class="input-append spancustom">
	{{Form::open(['action' => 'TasksController@search', 'method' => 'GET'])}}
    {{Form::text('search')}}
    {{Form::submit()}}
    {{Form::close()}}
</div>


	@foreach ($tasks as $task)

	<li>{{ $task->text }}</li>

	<!-- {{  link_to_route('tasks.edit', 'Edit task')  }} -->
<a class="btn btn-info" href="{{ URL::to('tasks/' . $task->id . '/edit') }}">Edit task</a>

{{ Form::open(['url' => 'tasks/' . $task->id, 'class' => 'pull-right']) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Delete this Task', ['class' => 'btn btn-warning']) }}
{{ Form::close() }}

		@endforeach

@if(Auth::check())
<div>
{{Form::open(['action' => 'SessionsController@destroy', 'method' => 'DELETE'])}}

{{$tasks->links();}}

<div class="form-group">{{Form::submit('Sign Out',['class' => 'btn btn-success'])}}</div>

{{Form::close()}}
</div>
@endif


@stop

