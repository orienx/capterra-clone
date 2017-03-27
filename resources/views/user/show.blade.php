@extends('layout/public')

@section('content')
  <a href="/user/">< Back</a>
  <ul>
    <li>Name: {{ $user->profile->name }}</li>
    <li>Email: {{ $user->email }}</li>
    <li>Created: {{ $user->created_at }}</li>
  </ul> 
@stop