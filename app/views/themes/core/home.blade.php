@extends((isset($layout)) ? $layout : 'layouts.core')

@section('header')
@parent
@stop

@section('slider')
<?php if (Config::get('lblog_config.slider') == 1) { ?>
<div id="slider">
  <a href="#" class="control_next">></a>
  <a href="#" class="control_prev"><</a>
  <ul>
@foreach ($slider_articles as $sarticle)
<?php if (!empty($sarticle->featured)) { ?>
<li><a href="{{ Config::get('lblog_config.BASE_URL') }}/post/{{ $sarticle->id }}/{{ $sarticle->slug }}"><img class="featured" src="{{ Config::get('lblog_config.BASE_URL') }}/images/posts/featured/{{ $sarticle->featured }}" alt="{{ $sarticle->title }}" /></a></li>
<?php } ?>
@endforeach	
<li>test</li>
  </ul>  
</div>
<?php } ?>
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