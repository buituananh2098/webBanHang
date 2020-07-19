<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table   = 'category_product';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
