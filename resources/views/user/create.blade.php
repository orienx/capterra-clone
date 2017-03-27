@extends('layout/public')

@section('content')
  <a href="/user/">< Back</a>
  <form method="POST" action="/user"  style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required />
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required />
    </div> 
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required/>
    </div>
    <div>
      <label for="password_confirmation">Password Confirm:</label>
      <input type="password" name="password_confirmation" id="password_confirmation" required />
    </div>
    <button type="submit">Create</button>
  </form>
@stop