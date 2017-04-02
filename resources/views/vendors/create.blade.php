@extends('layout/public')

@section('content')
  <a href="{{ action('VendorsController@index') }}">< Back</a>
  <form method="POST" action="{{ action('VendorsController@store') }}"  style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required />
    </div>
    <button type="submit">Create</button>
  </form>
@stop