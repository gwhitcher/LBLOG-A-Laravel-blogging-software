<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
{{ HTML::style('css/login.css'); }}
{{ HTML::script('js/default.js'); }}
</head>
<body>
<div id="container">
@if (Session::get('flash_message'))
<div class="flash">
{{ Session::get('flash_message') }}
</div>
@endif
<section id="content">
@yield('content')
</section>
</div>
</body>
</html>