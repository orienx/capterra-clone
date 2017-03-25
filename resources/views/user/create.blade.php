@extends('layout.public')

@section('content')
  <form action="/user" method="POST" style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" />
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="text" name="email" id="email" />
    </div> 
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" />
    </div>
    <div>
      <label for="password_confirmation">Password Confirm:</label>
      <input type="password" name="password_confirmation" id="password_confirmation" />
    </div>
    <button type="submit">Create</button>
  </form>
@stop