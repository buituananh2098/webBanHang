<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogImage extends Model{
    use SoftDeletes;

    protected $table   = 'blog_images';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

//    public function product()
//    {
//        return $this->belongsTo('App\Models\Blog');
//    }
}
