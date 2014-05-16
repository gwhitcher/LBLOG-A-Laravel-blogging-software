@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Create Sidebar Item</h1>
  {{ Form::open(array('admin.sidebarcreate', 'POST')) }}
@if ( $errors->count() > 0 )
      <p>The following errors have occurred:</p>
      <ul>
        @foreach( $errors->all() as $message )
          <li>{{ $message }}</li>
        @endforeach
      </ul>
@endif
	{{ Form::label("title", "Title") }}
	{{ Form::text("title") }}
    {{ Form::label("body", "Body") }}
	{{ Form::textarea('body', null, array(
    'class'      => 'mceNoEditor',
    'rows'    => 10,
	)) }}
	{{ Form::label("position", "Position") }}
	{{ Form::text("position") }}
	{{ Form::submit('Create') }}
	{{ Form::close() }}
@stop

@section('footer')
@parent
@stop