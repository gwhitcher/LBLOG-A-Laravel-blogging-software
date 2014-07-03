@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Create Nav Item</h1>
  {{ Form::open(array('admin.navcreate', 'POST')) }}
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
    {{ Form::label("url", "URL") }}
	{{ Form::text("url") }}
    {{ Form::label("position", "Position") }}
	{{ Form::text("position") }}
	{{ Form::submit('Create') }}
	{{ Form::close() }}
@stop

@section('footer')
@parent
@stop