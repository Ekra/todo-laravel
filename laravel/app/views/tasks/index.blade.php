@extends('layouts.default')

@section('content')

	<h1>Todo Web Application </h1>

	@foreach ($tasks as $task)

	<li>{{ $task->text }}</li>
	<!-- {{  link_to_route('tasks.edit', 'Edit task')  }} -->
<a class="btn btn-info" href="{{ URL::to('tasks/' . $task->id . '/edit') }}">Edit task</a>
{{ Form::open(array('url' => 'tasks/' . $task->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Task', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
	@endforeach



<div>{{ link_to_route('tasks.create', 'Create task') }}</div>


<div>{{ link_to_route('sessions.create', 'Log out') }}</div>


@stop

