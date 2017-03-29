<?php

namespace App\Http\Requests\Vendors;

use Auth;
use App\Http\Requests\Request;

class DeleteVendorRequest extends Request
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
