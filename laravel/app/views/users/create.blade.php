@extends('layouts.default')

@section('content')

	<h1>Create New Users </h1>

	{{Form::open(['route' => 'users.store']) }}
<div>

	{{Form::label('username','username:')}}
	{{Form::input('text','username')}}
	{{$errors->first('username')}}
</div>


<div>

	{{Form::label('email','Email:')}}
	{{Form::email('email')}}
	{{$errors->first('email')}}
</div>

<div>

	{{Form::label('password','password:')}}
	{{Form::input('password','password')}}
	{{$errors->first('password')}}
</div>

<div>{{Form::submit('Create user') }}
	{{Form::close()}}

@stop

