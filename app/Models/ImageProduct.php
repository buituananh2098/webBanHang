<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageProduct extends Model
{
    use SoftDeletes;

    protected $table   = 'images_product';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
