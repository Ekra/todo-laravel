<h1>Edit {{ $tasks->text }}</h1>

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