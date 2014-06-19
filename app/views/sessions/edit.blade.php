@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Edit User</h1>
  {{ Form::open(array('route' => 'admin.useredit', $user->id)) }}
  {{ Form::label("username", "Username") }}
  {{ Form::text("username") }}
  {{ Form::label("email", "Email") }}
  {{ Form::text("email") }}
  {{ Form::label("password", "Password") }}
  {{ Form::password("password") }}
  {{ Form::submit('Edit') }}
  {{ Form::close() }}
@stop

@section('footer')
@parent
@stop