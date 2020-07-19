<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends  Model{
    use SoftDeletes;
    protected $table   = 'blog_categories';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function parent()
    {
        return $this->belongsTo('App\Models\BlogCategory','parent_id');
    }
    public  function  children(){
        return $this->hasMany('App\Models\BlogCategory','parent_id');
    }
}
