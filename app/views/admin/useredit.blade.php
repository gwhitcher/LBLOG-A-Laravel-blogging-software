@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Edit Article</h1>
  {{ Form::model($user, array('route' => array('admin.useredit', $user->id), 'method' => 'PUT', 'files'=> true)) }}
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
  {{ Form::submit('Edit') }}
  {{ Form::close() }}
@stop

@section('footer')
@parent
@stop