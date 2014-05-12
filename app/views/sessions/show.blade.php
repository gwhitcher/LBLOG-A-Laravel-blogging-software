@extends('layouts/admin')

@section('header')
@parent
@stop

@section('sidebar')
@parent
@stop

@section('content')
{{ $users->username }}
@stop

@section('content')
@stop