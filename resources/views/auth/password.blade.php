@extends('layout/public')

@section('content')
  <a href="{{ action('Auth\AuthController@getLogin') }}">< Back</a>
  <form method="POST" action="{{ action('Auth\PasswordController@getEmail') }}" style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required />
    </div>
    <button type="submit">Send Password Reset</button>
  </form>
@stop