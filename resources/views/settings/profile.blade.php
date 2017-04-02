@extends('layout/public')

@section('content')
  <a href="{{ action('PagesController@index') }}">< Back</a>
  <form method="POST" action="{{ action('SettingsController@postProfile') }}" style="line-height: 32px">
    {!! csrf_field() !!}
    @include('elements/errors')
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name" value="{{ $user->profile->name }}" required />
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="{{ $user->email }}" disabled required />
    </div>
    <div>
      <label for="about" style="display:block;">About</label>
      <textarea name="about" id="about">{{ $user->profile->about }}</textarea>
    </div>
    <button type="submit">Save Profile</button>
  </form>
@stop