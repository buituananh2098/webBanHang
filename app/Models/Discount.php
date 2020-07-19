<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use SoftDeletes;

    protected $table   = 'discount';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\Http\Models\User', 'created_by');
    }
//    public function user()
//    {
//        return $this->hasOne('App\Http\Models\Discount');
//    }
}
