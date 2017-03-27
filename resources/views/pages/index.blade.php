@extends('layout/public')

@section('content')
  <a href="/user/">Users</a>
  @if(!$signedIn)
    <a href="/auth/register">Register</a>
  @endif
  <hr />
  @if($signedIn)
    Logged in as: {{ $currentUser->profile->name }} 
    <a href="/auth/logout">Logout</a>
  @else
    <a href="/auth/login">Login</a>
  @endif
@stop