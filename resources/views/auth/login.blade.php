@extends('layout/public')

@section('content')
  <a href="{{ action('PagesController@index') }}">< Back</a>
  <a href="{{ action('Auth\PasswordController@getEmail') }}">Reset Password</a>
  <form method="POST" action="{{ action('Auth\AuthController@getLogin') }}" style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required />
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