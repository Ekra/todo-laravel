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
	<h1>Create New Users </h1>
</div>

	{{Form::open(['route' => 'users.store']) }}
<div class="form_group">
	{{Form::label('username','username:')}}
	{{Form::text('username', null ,[ 'class'=>'form-control'])}}
	{{$errors->first('username')}}
</div>


<div class="form_group">
	{{Form::label('email','Email:')}}
	{{Form::email('email',null, ['class' => 'form-control'])}}
	{{$errors->first('email')}}
</div>

<div class="form_group">

	{{Form::label('password','password:')}}
	{{Form::password('password', ['class' => 'form-control'])}}
	{{$errors->first('password')}}
</div>

<div class="form_group">
	{{Form::submit('Create user',['class' => 'btn btn-success']) }}
</div>

	{{Form::close()}}
@stop

