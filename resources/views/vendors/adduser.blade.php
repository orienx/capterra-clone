@extends('layout/public')

@section('content')
  <a href="{{ action('VendorsController@show', ['id' => $vendor->id]) }}" href="/vendors/{{ $vendor->id }}">< Back</a>
  @if($hasUsers)
    <form method="POST" action="{{ action('VendorsController@getAddUserToVendor', ['id' => $vendor->id]) }}" style="line-height: 32px">
      {!! csrf_field() !!}
      @include('elements/errors')
      @foreach($users as $user)
        <div>
          <label for="name">{{ $user->profile->name }}</label>
          <input type="radio" name="id" id="id" value="{{ $user->id }}" required />
        </div>
      @endforeach
      <button type="submit">Add</button>
    </form>
  @else
    <p>Nothing to see here...</p>
  @endif
@stop