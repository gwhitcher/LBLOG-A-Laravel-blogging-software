@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Navigation</h1>
<a class="addnew" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/nav/create">Add New</a>
<table width="100%" border="0" id="admintable">
@foreach ($nav as $nav_object)
@foreach ($nav_object as $nav_item)
   <tr>
    <td width="90%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/nav/edit/{{ $nav_item->id }}">{{ $nav_item->title }}</a></td>
    <td width="5%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/nav/edit/{{ $nav_item->id }}">Edit</a></td>
    <td width="5%"><a onClick="return confirm('Delete?')" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/page/delete/{{ $nav_item->id }}">Delete</a></td>
  </tr>
@endforeach
</table>
{{ $nav_object->links() }}
@endforeach
@stop

@section('footer')
@parent
@stop