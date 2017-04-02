@extends('layout/public')

@section('content')
  <a href="{{ action('PagesController@index') }}">< Back</a>
  @if($signedIn)
    <a href="{{ action('UsersController@create') }}">Create User</a>
  @endif
  <ul>
    @foreach($users as $user)
      <li>
        <a href="{{ action('UsersController@show', ['id' => $user->id]) }}">{{ $user->profile->name }}</a>
        <span>{{ $user['email'] }}</span>
        <form method="POST" action="{{ action('UsersController@destroy', ['id' => $user->id]) }}" style="display:inline;">
            {!! csrf_field() !!}
            {{ method_field('DELETE') }}
            <button type="submit">Delete</button>
        </form>
        <form method="GET" action="{{ action('UsersController@edit', ['id' => $user->id ]) }}" style="display:inline;">
            {!! csrf_field() !!}
            <button type="submit">Edit</button>
        </form>
      </li>
    @endforeach
  </ul>
@stop