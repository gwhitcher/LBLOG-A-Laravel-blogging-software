@extends('layouts/login')

@section('content')
<div id="login">
<h1>LBlog {{ Config::get('lblog_config.lblog_version') }}</h1>
  {{ Form::open(array('route' => 'sessions.store')) }}
  {{ Form::label("email", "Email") }}
  {{ Form::text("email") }}
  {{ Form::label("password", "Password") }}
  {{ Form::password("password") }}
  {{ Form::submit('Login') }}
  {{ Form::close() }}
</div>
@stop