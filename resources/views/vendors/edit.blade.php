@extends('layout/public')

@section('content')
  <a href="/vendors/">< Back</a>
  <form method="POST" action="/vendors/{{ $vendor->id }}"  style="line-height: 32px">
    {!! csrf_field() !!}
    {{ method_field('PUT') }}
    @include('elements/errors')
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="{{ $vendor->name }}" required />
    </div>
    <button type="submit">Edit</button>
  </form>
@stop