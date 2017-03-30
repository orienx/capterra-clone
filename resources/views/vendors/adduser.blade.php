@extends('layout/public')

@section('content')
  <a href="/vendors/{{ $vendor->id }}">< Back</a>
  <form method="POST" action="/vendors/{{ $vendor->id }}/adduser"  style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    @foreach($users as $user)
      <div>
        <label for="name">{{ $user->profile->name }}</label>
        <input type="radio" name="id" id="id" value="{{ $user->id }}" required />
      </div>
    @endforeach
    <button type="submit">Add</button>
  </form>
@stop