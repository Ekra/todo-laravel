@extends('layouts.default')

@section('content')

	<h1>Todo Web Application </h1>

	@foreach ($tasks as $task)

	<li>{{ $task->text }}</li>
	<!-- {{  link_to_route('tasks.edit', 'Edit task')  }} -->
<a class="btn btn-info" href="{{ URL::to('tasks/' . $task->id . '/edit') }}">Edit task</a>

{{ Form::open(['url' => 'tasks/' . $task->id, 'class' => 'pull-right']) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Task', ['class' => 'btn btn-warning']) }}
				{{ Form::close() }}
	@endforeach



<div>{{ link_to_route('tasks.create', 'Create task') }}</div>

@if(Auth::check())
<div>
{{Form::open(['action' => 'SessionsController@destroy', 'method' => 'DELETE'])}}
{{Form::submit('Logout')}}
{{Form::close()}}
</div>
@endif


@stop

