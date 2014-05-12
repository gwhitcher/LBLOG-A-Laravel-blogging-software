@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Pages</h1>
<a class="addnew" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/page/create">Add New</a>
<table width="100%" border="0" id="admintable">
@foreach ($pages as $page_object)
@foreach ($page_object as $page)
   <tr>
    <td width="90%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/page/edit/{{ $page->id }}">{{ $page->title }}</a></td>
    <td width="5%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/page/edit/{{ $page->id }}">Edit</a></td>
    <td width="5%"><a onClick="return confirm('Delete?')" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/page/delete/{{ $page->id }}">Delete</a></td>
  </tr>
@endforeach
</table>
{{ $page_object->links() }}
@endforeach
@stop

@section('footer')
@parent
@stop