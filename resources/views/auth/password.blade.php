@extends('layout/public')

@section('content')
  <a href="/auth/login">< Back</a>
  <form method="POST" action="/password/email" style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required />
    </div>
    <button type="submit">Send Password Reset</button>
  </form>
@stop