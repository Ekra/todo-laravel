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


{{Form::open(['route' => 'sessions.store']) }}

<div class="form_group">
{{Form::label('email', 'Email:')}}
{{Form::email('email',null, ['class' => 'form-control'])}}
</div>


<div class="form_group">
{{Form::label('password', 'Password:')}}
{{Form::password('password', ['class' => 'form-control'])}}

</div>

<div>{{Form::submit('sign in') }}</div>

<div>{{ link_to_route('users.create', 'Create user') }}</div>


{{Form::close()}}


</body>
</html>
