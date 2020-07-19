<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table   = 'categories';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function category_product()
    {
        return $this->belongsToMany('App\Models\CategoryProduct');
    }
}
