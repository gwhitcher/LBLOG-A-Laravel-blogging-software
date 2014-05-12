@extends('layouts/layout')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
@foreach ($articles as $article_object)
@foreach ($article_object as $article)
<article>
<h2><a href="{{ Config::get('lblog_config.BASE_URL') }}/blog/{{ $article->id }}/{{ $article->slug }}">{{ $article->title }}</a></h2>
{{ $article->body }}
</article>
@endforeach
{{ $article_object->links() }}
@endforeach
@stop

@section('content')
@stop