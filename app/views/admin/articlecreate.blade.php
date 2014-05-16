@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Create Article</h1>
  {{ Form::open(array('admin.articlecreate', 'POST')) }}
@if ( $errors->count() > 0 )
      <p>The following errors have occurred:</p>
      <ul>
        @foreach( $errors->all() as $message )
          <li>{{ $message }}</li>
        @endforeach
      </ul>
@endif
	{{ Form::label("category_id", "Category") }}
    <select name="category_id">
	<?php
    foreach ($categories as $category) {
	?>
    <option value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>
	<?php } ?>
	</select>
	{{ Form::label("title", "Title") }}
	{{ Form::text("title") }}
	{{ Form::label("body", "Body") }}
	{{ Form::textarea("body") }}
	{{ Form::label("featured", "Featured") }}
	{{ Form::file("featured") }}
	{{ Form::label("metadescription", "Meta Description") }}
	{{ Form::text("metadescription") }}
	{{ Form::label("metakeywords", "Meta Keywords") }}
	{{ Form::text("metakeywords") }}
	{{ Form::label("slider", "Slider") }}
	{{ Form::text("slider") }}
	{{ Form::submit('Create') }}
	{{ Form::close() }}
@stop

@section('footer')
@parent
@stop