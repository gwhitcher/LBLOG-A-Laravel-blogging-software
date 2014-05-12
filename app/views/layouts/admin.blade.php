<html>
<head>
{{ HTML::style('css/admin.css'); }}
{{ HTML::style('css/ui-lightness/jquery-ui-1.10.4.min.css'); }}
{{ HTML::script('js/jquery-1.10.2.js'); }}
{{ HTML::script('js/jquery-ui-1.10.4.min.js'); }}
{{ HTML::script('js/default.js'); }}
</head>
<body>
@if (Session::get('flash_message'))
<div class="flash">
{{ Session::get('flash_message') }}
</div>
@endif
<div id="container">
<header id="header">
@section('header')
<h1><a href="{{ Config::get('lblog_config.BASE_URL') }}/dashboard">LBlog {{ Config::get('lblog_config.lblog_version') }}</a></h1>
<h2>Developed by <a href="http://www.georgewhitcher.com" target="_blank">George Whitcher</a></h2>
@show
</header>
<div id="body_container">
<aside id="sidebar">
@section('sidebar')
<nav id="navigation">
<ul>
	<li><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/articles">Articles</a></li>
    <li><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/categories">Categories</a></li>
    <li><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/pages">Pages</a></li>
    <li><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/nav">Navigation</a></li>
    <li><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/sidebar">Sidebar</a></li>
</ul>
</nav>
@show
</aside>
<section id="content">
@yield('content')
</section>
</div>
<footer id="footer">
@section('footer')
<p>&copy; Copyright <?php echo date("Y"); ?> LBlog {{ Config::get('lblog_config.lblog_version') }} - Developed by <a href="http://www.georgewhitcher.com" target="_blank">George Whitcher</a></p>
@show
</footer>
</div>
</body>
</html>