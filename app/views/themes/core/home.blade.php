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
<?php if (!empty($article->featured)) { ?>
<a href="{{ Config::get('lblog_config.BASE_URL') }}/post/{{ $article->id }}/{{ $article->slug }}"><img class="featured" src="{{ Config::get('lblog_config.BASE_URL') }}/images/posts/featured/{{ $article->featured }}" alt="{{ $article->title }}" /></a>
<?php } ?>
<h2><a href="{{ Config::get('lblog_config.BASE_URL') }}/post/{{ $article->id }}/{{ $article->slug }}">{{ $article->title }}</a></h2>
<p><?php 
$body = substr($article->body,0,300);
echo strip_tags($body, '<br>');
?>...</p>
<div class="readmore">
<a href="{{ Config::get('lblog_config.BASE_URL') }}/post/{{ $article->id }}/{{ $article->slug }}">Read More</a>
</div>
</article>
@endforeach
<div class="pagination-right">
{{ $articles->links() }}
</div>
@stop

@section('footer')
@parent
@stop