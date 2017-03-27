@extends('layout/public')

@section('content')
  <a href="/">< Back</a>
  <a href="/user/create">+ Create User</a>
  <ul>
    @foreach($users as $user)
      <li>
        <a href="/user/{{ $user['id'] }}">
          {{ $user['name'] }}
        </a>
        <span>
          {{ $user['email'] }}
        </span>
        <form method="POST" action="/user/{{ $user->id }}" style="display:inline;">
            {!! csrf_field() !!}
            {{ method_field('DELETE') }}
            <button type="submit">Delete</button>
        </form>
        <form method="GET" action="/user/{{ $user->id }}/edit" style="display:inline;">
            {!! csrf_field() !!}
            <button type="submit">Edit</button>
        </form>
      </li>
    @endforeach
  </ul>
@stop