@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Users</h1>
<a class="addnew" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/user/create">Add New</a>
<table width="100%" border="0" id="admintable">
@foreach ($users as $user_object)
@foreach ($user_object as $user)
   <tr>
    <td width="90%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/user/edit/{{ $user->id }}">{{ $user->username }}</a></td>
    <td width="5%"><a href="{{ Config::get('lblog_config.BASE_URL') }}/admin/user/edit/{{ $user->id }}">Edit</a></td>
    <td width="5%"><a onClick="return confirm('Delete?')" href="{{ Config::get('lblog_config.BASE_URL') }}/admin/user/delete/{{ $user->id }}">Delete</a></td>
  </tr>
@endforeach
</table>
@endforeach
@stop

@section('footer')
@parent
@stop