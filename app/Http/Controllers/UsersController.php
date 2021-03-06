<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Redirect;
use App\User;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\DeleteUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;

class UsersController extends Controller
{
    public function index()
    {
      $users = User::all();

      return view('user/index', compact('users'));
    }

    public function show($id)
    {
      $user = User::findOrFail($id);

      $hasVendors = count($user->vendors);

      return view('user/show', compact('user', 'hasVendors'));
    }

    public function create()
    {
      return view('user/create');
    }

    public function store(StoreUserRequest $request)
    {
      $user = User::create([
        'email' => Input::get('email'),
        'password' => bcrypt(Input::get('password'))
      ]);

      $profile = $user->profile()->create([
        'name' => Input::get('name'),
        'about' => Input::get('about')
      ]);

      return Redirect::action('UsersController@show', [
        'id' => $user->id
      ]);
    }

    public function destroy(DeleteUserRequest $request, $id)
    {
      $user = User::whereId($id)->first();
      $user->delete();

      return Redirect::action('UsersController@index');
    }

    public function edit($id)
    {
      $user = User::whereId($id)->first();

      return view('user/edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
      $user = User::whereId($id)->first();

      $user->update([
        'email' => Input::get('email')
      ]);

      $user->profile->update([
        'name' => Input::get('name'),
        'about' => Input::get('about')
      ]);

      $user->save();

      return Redirect::action('UsersController@index');
    }
}
