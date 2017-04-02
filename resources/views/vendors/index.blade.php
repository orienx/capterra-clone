@extends('layout/public')

@section('content')
  <a href="{{ action('PagesController@index') }}">< Back</a>
  <a href="{{ action('VendorsController@create') }}">Create Vendor</a>
  <ul>
    @foreach($vendors as $vendor)
      <li>
        <a href="{{ action('VendorsController@show', ['id' => $vendor->id]) }}">{{ $vendor->name }}</a>
        <form method="POST" action="{{ action('VendorsController@destroy', ['id' => $vendor->id]) }}" style="display:inline;">
            {!! csrf_field() !!}
            {{ method_field('DELETE') }}
            <button type="submit">Delete</button>
        </form>
        <form method="GET" action="{{ action('VendorsController@edit', ['id' => $vendor->id ]) }}" style="display:inline;">
            {!! csrf_field() !!}
            <button type="submit">Edit</button>
        </form>
      </li>
    @endforeach
  </ul>
@stop