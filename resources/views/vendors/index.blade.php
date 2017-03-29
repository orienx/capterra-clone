@extends('layout/public')

@section('content')
  <a href="/">< Back</a>
  <a href="/vendors/create">Create Vendor</a>
  <ul>
    @foreach($vendors as $vendor)
      <li>
        <a href="/vendors/{{ $vendor->id }}">{{ $vendor->name }}</a>
        <form method="POST" action="/vendors/{{ $vendor->id }}" style="display:inline;">
            {!! csrf_field() !!}
            {{ method_field('DELETE') }}
            <button type="submit">Delete</button>
        </form>
        <form method="GET" action="/vendors/{{ $vendor->id }}/edit" style="display:inline;">
            {!! csrf_field() !!}
            <button type="submit">Edit</button>
        </form>
      </li>
    @endforeach
  </ul>
@stop