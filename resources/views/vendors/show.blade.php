@extends('layout/public')

@section('content')
  <a href="/vendors/">< Back</a>
  <h3>Details</h3>
  <ul>
    <li>Name: {{ $vendor->name }}</li>
  </ul>
  @if($hasUsers)
    <h3>Users</h3>    <ul>
      @foreach($vendor->users as $user)
        <li>
          <a href="/user/{{ $user->id }}">{{ $user->profile->name }}</a>
          <form method="POST" action="/vendors/{{ $vendor->id }}/removeuser" style="display:inline;">
              {!! csrf_field() !!}
              {{ method_field('DELETE') }}
              <input type="hidden" id="id" name="id" value="{{ $user->id }}" />
              <button type="submit">Delete</button>
          </form>
        </li>
      @endforeach
    </ul>
  @endif
  <a href="/vendors/{{ $vendor->id }}/adduser">Add User</a>
@stop