@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Create User</h1>
  {{ Form::open(array('admin.usercreate', 'POST')) }}
@if ( $errors->count() > 0 )
      <p>The following errors have occurred:</p>
      <ul>
        @foreach( $errors->all() as $message )
          <li>{{ $message }}</li>
        @endforeach
      </ul>
@endif
	{{ Form::label("username", "Username") }}
	{{ Form::text("username") }}
	{{ Form::label("email", "Email Address") }}
	{{ Form::text("email") }}
	{{ Form::label("password", "Password") }}
	{{ Form::password("password") }}
	{{ Form::submit('Create') }}
	{{ Form::close() }}
@stop

@section('footer')
@parent
@stop