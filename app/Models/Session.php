<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use SoftDeletes;

    protected $table   = 'session';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

}
