@extends((isset($layout)) ? $layout : 'layouts.core')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
@foreach ($pages as $page)
<div id="content_container">
<h1>{{ $page->title }}</h1>
{{ $page->body }}
</div>
@endforeach
@stop

@section('footer')
@parent
@stop