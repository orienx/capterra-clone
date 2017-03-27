<?php

namespace App\Http\Controllers;

use Input;
use Redirect;

class SettingsController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getProfile()
  {
    $user = $this->user;

    return view('settings/profile', compact('user'));
  }

  public function postProfile()
  {
    $profile = $this->user->profile;

    $profile->update([
      'name' => Input::get('name'),
      'about' => Input::get('about')
    ]);

    $profile->save();

    return Redirect::action('SettingsController@getProfile');
  }
}
