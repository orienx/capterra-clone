@extends('layout/public')

@section('content')
  <a href="/vendors/">< Back</a>
  <h3>Details</h3>
  <ul>
    <li>Name: {{ $vendor->name }}</li>
  </ul>
  @if($hasUsers)
    <h3>Users</h3>
    <ul>
      @foreach($vendor->users as $user)
        <li>
          <a href="/user/{{ $user->id }}">{{ $user->profile->name }}</a>
        </li>
      @endforeach
    </ul>
  @endif
@stop