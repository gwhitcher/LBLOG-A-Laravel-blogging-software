@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Edit Page</h1>
<a class="view_item" href="{{ Config::get('lblog_config.BASE_URL') }}/{{ $page->slug }}">View Page</a>
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
	{{ Form::label("metadescription", "Meta Description") }} (leave blank for default)
	{{ Form::text("metadescription") }}
	{{ Form::label("metakeywords", "Meta Keywords") }} (leave blank for default, seperate each by comma)
	{{ Form::text("metakeywords") }}
	{{ Form::submit('Edit') }}
	{{ Form::close() }}
@stop

@section('footer')
@parent
@stop