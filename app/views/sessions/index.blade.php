@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
<h1>Dashboard</h1>
<p>Welcome to the dashboard {{ Auth::user()->username; }}!</p>
@stop

@section('footer')
@parent
@stop