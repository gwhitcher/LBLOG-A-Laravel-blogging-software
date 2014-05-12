@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Categories</h1>
<a class="addnew" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/category/create">Add New</a>
<table width="100%" border="0" id="admintable">
@foreach ($categories as $category_object)
@foreach ($category_object as $category)
   <tr>
    <td width="90%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/category/edit/{{ $category->id }}">{{ $category->title }}</a></td>
    <td width="5%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/category/edit/{{ $category->id }}">Edit</a></td>
    <td width="5%"><a onClick="return confirm('Delete?')" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/category/delete/{{ $category->id }}">Delete</a></td>
  </tr>
@endforeach
</table>
{{ $category_object->links() }}
@endforeach
@stop

@section('footer')
@parent
@stop