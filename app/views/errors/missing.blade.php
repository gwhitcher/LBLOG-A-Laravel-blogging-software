@extends((isset($layout)) ? $layout : 'layouts.core')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Error 404</h1>
<p>We are sorry but the page you visited does not appear to exist!  Please try again.</p>
@stop

@section('footer')
@parent
@stop