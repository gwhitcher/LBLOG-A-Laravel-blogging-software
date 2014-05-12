@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Articles</h1>
<a class="addnew" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/article/create">Add New</a>
<table width="100%" border="0" id="admintable">
@foreach ($articles as $article_object)
@foreach ($article_object as $article)
   <tr>
    <td width="90%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/article/edit/{{ $article->id }}">{{ $article->title }}</a></td>
    <td width="5%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/article/edit/{{ $article->id }}">Edit</a></td>
    <td width="5%"><a onClick="return confirm('Delete?')" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/article/delete/{{ $article->id }}">Delete</a></td>
  </tr>
@endforeach
</table>
{{ $article_object->links() }}
@endforeach
@stop

@section('footer')
@parent
@stop