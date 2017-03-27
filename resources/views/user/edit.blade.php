@extends('layout/public')

@section('content')
  <a href="/user/">< Back</a>
  <form method="POST" action="/user/{{ $user->id }}"  style="line-height: 32px">
    {!! csrf_field() !!}
    {{ method_field('PUT') }}
    @include('elements/errors')
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="{{ $user->name }}" required />
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="{{ $user->email }}" required />
    </div> 
    <button type="submit">Edit</button>
  </form>
@stop