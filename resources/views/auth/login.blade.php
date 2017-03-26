@extends('layout/public')

@section('content')
  <a href="/">< Back</a>
  <a href="/auth/register">+ Register</a>
  <form method="POST" action="/auth/login" style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" reguired />
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required />
    </div>
    <div>
    <label for="remember">Remember Me</label>
    <input type="checkbox" name="remember" id="remember">
    <button type="submit">Register</button>
  </form>
@stop