@extends('layout/public')

@section('content')
  <a href="{{ action('VendorsController@index') }}">< Back</a>
  <form method="POST" action="{{ action('VendorsController@update', ['id' => $vendor->id]) }}"  style="line-height: 32px">
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