<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'name',
      'deleted_at'
    ];

    // public function users()
    // {
    //   return $this->belongsToMany('App\User');
    // }

    // public function addUser($id)
    // {
    //   return $this->attatch($id);
    // }
}
