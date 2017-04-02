@extends('layout/public')

@section('content')
  <a href="{{ action('VendorsController@index') }}">< Back</a>
  <h3>Details</h3>
  <ul>
    <li>Name: {{ $vendor->name }}</li>
  </ul>
  @if($hasUsers)
    <h3>Users</h3>    <ul>
      @foreach($vendor->users as $user)
        <li>
          <a href="{{ action('UsersController@show', ['id' => $user->id]) }}">{{ $user->profile->name }}</a>
          <form method="POST" action="{{ action('VendorsController@removeUserFromVendor', ['id' => $vendor->id]) }}" style="display:inline;">
              {!! csrf_field() !!}
              {{ method_field('DELETE') }}
              <input type="hidden" id="id" name="id" value="{{ $user->id }}" />
              <button type="submit">Delete</button>
          </form>
        </li>
      @endforeach
    </ul>
  @endif
  <a href="{{ action('VendorsController@getAddUserToVendor', ['id' => $vendor->id]) }}">Add User</a>
@stop