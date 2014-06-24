<html>
<head>
<title>
<?php
$name = Route::currentRouteName();

if ($name == 'post') {
	echo ''.$article->title.' - '.Config::get('lblog_config.title').'';	
} elseif ($name == 'category') {
	echo ''.$slug.' - '.Config::get('lblog_config.title').'';		
} elseif ($name == 'home') {
	echo ''.Config::get('lblog_config.title').' - '.Config::get('lblog_config.sub_title').'';	
} elseif ($name == 'page') {
	if (!empty($page->title)) {
		echo ''.$page->title.' - '.Config::get('lblog_config.title').'';	
	} else {
		echo ''.Config::get('lblog_config.title').' - '.Config::get('lblog_config.sub_title').'';
	}
} else {
	echo ''.Config::get('lblog_config.title').' - '.Config::get('lblog_config.sub_title').'';
}
?></title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if ($name == 'post') {
	if (!empty($article->metadescription)) {
		echo '<meta name="description" content="'.$article->metadescription.'" />';
	} else {
		echo '<meta name="description" content="'.Config::get('lblog_config.metadescription');
	}
	if (!empty($article->metakeywords)) {
		echo '<meta name="keywords" content="'.$article->metakeywords.'" />';	
	} else {	
		echo '<meta name="keywords" content="'.Config::get('lblog_config.metakeywords').'" />';
	}	
} elseif ($name == 'category') {
	if (!empty($category->metadescription)) {
		echo '<meta name="description" content="'.$category->metadescription.'" />';
	} else {
		echo '<meta name="description" content="'.Config::get('lblog_config.metadescription').'" />';
	}
	if (!empty($category->metakeywords)) {
		echo '<meta name="keywords" content="'.$category->metakeywords.'" />';	
	} else {	
		echo '<meta name="keywords" content="'.Config::get('lblog_config.metakeywords').'" />';
	}				
} elseif ($name == 'home') {
	echo '<meta name="description" content="'.Config::get('lblog_config.metadescription').'" />';	
	echo '<meta name="keywords" content="'.Config::get('lblog_config.metakeywords').'" />';	
} elseif ($name == 'page') {
	if (!empty($page->metadescription)) {
		echo '<meta name="description" content="'.$page->metadescription.'" />';
	} else {
		echo '<meta name="description" content="'.Config::get('lblog_config.metadescription').'" />';
	}
	if (!empty($page->metakeywords)) {
		echo '<meta name="keywords" content="'.$page->metakeywords.'" />';	
	} else {	
		echo '<meta name="keywords" content="'.Config::get('lblog_config.metakeywords').'" />';
	}
} else {
	echo '<meta name="description" content="'.Config::get('lblog_config.metadescription').'" />';	
	echo '<meta name="keywords" content="'.Config::get('lblog_config.metakeywords').'" />';
}
?>
<link href="{{ Config::get('lblog_config.BASE_URL') }}/favicon.ico" type="image/x-icon" rel="icon" />
{{ HTML::style('css/core/styles.css'); }}
{{ HTML::style('css/core/slider.css'); }}
{{ HTML::script('js/jquery.js'); }}
{{ HTML::script('js/jquery-ui.js'); }}
{{ HTML::script('js/default.js'); }}
{{ HTML::script('js/slider.js'); }}
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
	@foreach ($nav_items as $nav_item)
    <li><a href="{{ $nav_item->url }}">{{ $nav_item->title }}</a></li>
    @endforeach
</ul>
</nav>
@yield('slider')
<aside id="sidebar">
@section('sidebar')
<?php foreach ($sidebar_items as $sidebar): ?>
<div class="sidebar_item">
<div class="sidebar_title"><?php echo $sidebar->title; ?></div>
<?php echo eval('?>' .$sidebar->body. '<?php '); ?>
</div>
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
<p class="copyright">&copy; Copyright <?php echo date('Y'); ?> {{ Config::get('lblog_config.title') }} - Powered by <a href="http://lblog.georgewhitcher.com" target="_blank">LBlog {{ Config::get('lblog_config.lblog_version') }}</a></p>
@show
</footer>
</div>
</body>
</html>