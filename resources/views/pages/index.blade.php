@extends('layout/public')

@section('content')
  <a href="/user/">Users</a>
  <a href="/vendors/">Vendors</a>
  @if(!$signedIn)
    <a href="/auth/register">Register</a>
  @endif
  <hr />
  @if($signedIn)
    Logged in as: 
    <a href="/settings/profile">{{ $currentUser->profile->name }}</a>
    <a href="/auth/logout">Logout</a>
  @else
    <a href="/auth/login">Login</a>
  @endif
@stop