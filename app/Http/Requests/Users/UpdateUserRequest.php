<?php

namespace App\Http\Requests\Users;

use Auth;
use App\Http\Requests\Request;

class UpdateUserRequest extends Request
{
  public function authorize()
  {
    return Auth::check();
  }

  public function rules()
  {
    return [
      'name' => 'required',
      'email' => 'required|email'
    ];
  }
}
