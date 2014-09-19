
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

{{ Form::open(array('route'=>'tasks.store')) }}

<div class="form_group">

{{Form::label('Add Task')}}

{{ Form::text('text' , null, ['class' => 'form-control']) }}

{{Form::submit('Create task', ['class' => 'btn btn-success'])}}
</div>
{{Form::close()}}

</div>

@stop


