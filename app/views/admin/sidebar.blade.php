@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Sidebar</h1>
<a class="addnew" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/sidebar/create">Add New</a>
<table width="100%" border="0" id="admintable">
@foreach ($sidebar as $sidebar_object)
@foreach ($sidebar_object as $sidebar_item)
   <tr>
    <td width="90%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/sidebar/edit/{{ $sidebar_item->id }}">{{ $sidebar_item->title }}</a></td>
    <td width="5%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/sidebar/edit/{{ $sidebar_item->id }}">Edit</a></td>
    <td width="5%"><a onClick="return confirm('Delete?')" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/sidebar/delete/{{ $sidebar_item->id }}">Delete</a></td>
  </tr>
@endforeach
</table>
{{ $sidebar_object->links() }}
@endforeach
@stop

@section('footer')
@parent
@stop