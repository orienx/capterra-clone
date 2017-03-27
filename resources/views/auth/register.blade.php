@extends('layout/public')

@section('content')
  <a href="/">< Back</a>
  <form method="POST" action="/auth/register" style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required />
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required />
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required />
    </div>
    <div>
      <label for="confirm-password">Confirm Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation" required />
    </div>
    <button type="submit">Register</button>
  </form>
@stop