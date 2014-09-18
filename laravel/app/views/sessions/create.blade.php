<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

</head>
<body>


{{Form::open(['route' => 'sessions.store']) }}

<div>
{{Form::label('email', 'Email:')}}
{{Form::email('email')}}
</div>


<div>
{{Form::label('password', 'Password:')}}
{{Form::password('password')}}
</div>

<div>{{Form::submit('sign in') }}</div>

<div>{{ link_to_route('users.create', 'Create user') }}</div>


{{Form::close()}}


</body>
</html>
