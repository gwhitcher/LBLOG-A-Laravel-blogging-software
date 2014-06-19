@extends((isset($layout)) ? $layout : 'layouts.core')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<div id="content_container">
<h1>About</h1>
<p>{{ Config::get('lblog_config.title') }} {{ Config::get('lblog_config.lblog_version') }} is an open source blog software. Written by George Whitcher in PHP with the Laravel framework.</p>
<p>Developed by: <a href="http://www.georgewhitcher.com" target="_blank">George Whitcher</a></p>
</div>
@stop

@section('footer')
@parent
@stop