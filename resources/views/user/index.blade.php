@extends('layout/public')

@section('content')
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
      </li>
    @endforeach
  </ul>
@stop