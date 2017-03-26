<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Redirect;
use App\User;
use App\Http\Requests\Users\StoreUserRequest;

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

      return view('user/show', compact('user'));
    }

    public function create()
    {
      return view('user/create');
    }

    public function store(StoreUserRequest $request)
    {
      $user = User::create([
        'name' => Input::get('name'),
        'email' => Input::get('email'),
        'password' => bcrypt(Input::get('password'))
      ]);

      return Redirect::action('UsersController@show', [
        'id' => $user->id
      ]);
    }

    public function destroy($id)
    {
      $user = User::whereId($id)->first();
      $user->delete();

      return Redirect::action('UsersController@index');
    }
}
