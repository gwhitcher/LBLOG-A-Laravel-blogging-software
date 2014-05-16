@extends((isset($layout)) ? $layout : 'layouts.core')

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
<h2>{{ $article->title }}</h2>
{{ $article->body }}
</article>
@endforeach
@endforeach
@stop

@section('content')
@stop