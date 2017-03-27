<?php

namespace App\Http\Requests\Users;

use Auth;
use App\Http\Requests\Request;

class DeleteUserRequest extends Request
{
  public function authorize()
  {
    return Auth::check();
  }

  public function rules()
  {
    return [];
  }
}
