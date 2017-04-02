@extends('layout/public')

@section('content')
  <a href="{{ action('UsersController@index') }}">< Back</a>
  <h3>Details</h3>
  <ul>
    <li>Name: {{ $user->profile->name }}</li>
    <li>Email: {{ $user->email }}</li>
    <li>Created: {{ $user->created_at }}</li>
    <li>About: {{ $user->profile->about }}</li>
  </ul>
  @if($hasVendors)
    <h3>Vendors</h3>
    <ul>
      @foreach($user->vendors as $vendor)
        <li>
          <a href="{{ action('VendorsController@show', ['id' => $vendor->id]) }}">{{ $vendor->name }}</a>
        </li>
      @endforeach
    </ul>
  @endif
@stop