<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'email', 
        'password',
        'deleted_at'
    ];

    protected $hidden = [
        'password', 
        'remember_token'
    ];

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
}
