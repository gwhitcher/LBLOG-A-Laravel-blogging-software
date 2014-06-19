@extends((isset($layout)) ? $layout : 'layouts.core')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
@foreach ($articles as $article)
<article>
<?php if(!empty($article->featured)) { ?>
<img class="featured" src="{{ Config::get('lblog_config.BASE_URL') }}/images/posts/featured/{{ $article->featured }}" alt="{{ $article->title }}" />
<?php } ?>
<h2>{{ $article->title }}</h2>
{{ $article->body }}
</article>
@endforeach
@stop

@section('footer')
@parent
@stop