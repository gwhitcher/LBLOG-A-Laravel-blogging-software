@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Edit Page</h1>
  {{ Form::model($page, array('route' => array('admin.pageedit', $page->id), 'method' => 'PUT')) }}
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
	{{ Form::textarea("body") }}
	{{ Form::label("metadescription", "Meta Description") }}
	{{ Form::text("metadescription") }}
	{{ Form::label("metakeywords", "Meta Keywords") }}
	{{ Form::text("metakeywords") }}
	{{ Form::submit('Edit') }}
	{{ Form::close() }}
@stop

@section('footer')
@parent
@stop