@extends('layout/public')

@section('content')
  <a href="/vendors/">< Back</a>
  <ul>
    <li>Name: {{ $vendor->name }}</li>
  </ul> 
@stop