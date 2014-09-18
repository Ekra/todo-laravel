@extends('layouts.default')

@section('content')

<h1>Hello,{{ $user->username}}</h1>

<div>{{ link_to_route('tasks.index', 'Your Todo') }}</div>

@stop

