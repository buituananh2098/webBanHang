<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $table   = 'users';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function role()
    {
        return $this->hasOne('App\Http\Models\Role');
    }
}
