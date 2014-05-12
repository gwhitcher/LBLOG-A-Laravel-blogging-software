@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Edit Nav Item</h1>
  {{ Form::model($nav, array('route' => array('admin.navedit', $nav->id), 'method' => 'PUT')) }}
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
	{{ Form::submit('Edit') }}
	{{ Form::close() }}
@stop

@section('footer')
@parent
@stop