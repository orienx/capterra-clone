@extends('layout/public')

@section('content')
  <a href="/vendors/">< Back</a>
  <form method="POST" action="/vendors"  style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required />
    </div>
    <button type="submit">Create</button>
  </form>
@stop