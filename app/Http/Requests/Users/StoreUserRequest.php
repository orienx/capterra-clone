<?php

namespace App\Http\Requests\Users;

use Auth;
use App\Http\Requests\Request;

class StoreUserRequest extends Request
{
  public function authorize()
  {
    return Auth::check();
  }

  public function rules()
  {
    return [
      'email' => 'required|email',
      'password' => 'required|min:3|confirmed',
      'password_confirmation' => 'required|same:password'
    ];
  }
}
