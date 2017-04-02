@extends('layout/public')

@section('content')
  <a href="{{ action('UsersController@index') }}">Users</a>
  <a href="{{ action('VendorsController@index') }}">Vendors</a>
  @if(!$signedIn)
    <a href="{{ action('Auth\AuthController@getRegister') }}">Register</a>
  @endif
  <hr />
  @if($signedIn)
    Logged in as: 
    <a href="{{ action('SettingsController@getProfile') }}">{{ $currentUser->profile->name }}</a>
    <a href="{{ action('Auth\AuthController@logout') }}">Logout</a>
  @else
    <a href="{{ action('Auth\AuthController@getLogin') }}">Login</a>
  @endif
@stop