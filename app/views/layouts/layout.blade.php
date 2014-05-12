<html>
<head>
{{ HTML::style('css/styles.css'); }}
{{ HTML::script('js/default.js'); }}
</head>
<body>
<div id="container">
<header id="header">
@section('header')
<h1><a href="{{ Config::get('lblog_config.BASE_URL') }}">{{ Config::get('lblog_config.title') }}</a></h1>
<h2>{{ Config::get('lblog_config.sub_title') }}</h2>
@show
</header>
<nav id="nav">
<ul>
	@foreach ($nav_items as $nav_object)
	@foreach ($nav_object as $nav_item)
    <li><a href="{{ $nav_item->url }}">{{ $nav_item->title }}</a></li>
    @endforeach
    @endforeach
</ul>
</nav>
<aside id="sidebar">
@section('sidebar')
<?php foreach ($sidebar_items as $sidebar_object): ?>
<?php foreach ($sidebar_object as $sidebar): ?>
<div class="sidebar_item">
<div class="sidebar_title"><?php echo $sidebar->title; ?></div>
<?php echo $sidebar->body; ?>
</div>
<?php endforeach; ?>
<?php endforeach; ?>
@show
</aside>
@if (Session::get('flash_message'))
<div class="flash">
{{ Session::get('flash_message') }}
</div>
@endif
<section id="content">
@yield('content')
</section>
<footer id="footer">
@section('footer')
<p class="copyright">&copy; Copyright <?php echo date('Y'); ?> {{ Config::get('lblog_config.title') }} {{ Config::get('lblog_config.lblog_version') }} - Developed by <a href="http://www.georgewhitcher.com" target="_blank">George Whitcher</a></p>
@show
</footer>
</div>
</body>
</html>