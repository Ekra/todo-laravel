
@extends('layouts.default')

@section('content')

{{ Form::open(array('route'=>'tasks.store')) }}

<div class="form_group">

{{Form::label('Add Task')}}

{{ Form::text('text') }}
{{Form::submit('Create task', ['class' => 'btn btn-success'])}}

{{Form::close()}}

</div>

@stop


