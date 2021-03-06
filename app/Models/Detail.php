<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail extends Model
{
    use SoftDeletes;

    protected $table   = 'details';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];


}
