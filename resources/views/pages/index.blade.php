@extends('layout/public')

@section('content')
  <a href="/user/">Users</a>
  <a href="/auth/register">+ Register</a>
  <a href="/auth/login">+ Login</a>
  <a href="/auth/logout">+ Logout</a>
  <hr />
  @if($signedIn)
  Logged in as: {{ $currentUser->name }}
  @endif
@stop