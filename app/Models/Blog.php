<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model{
    use SoftDeletes;
    protected $table   = 'blog';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];
//    public function blog()
//    {
//        return $this->hasOne('App\Models\BlogCategory');
//    }
//    public function image()
//    {
//        return $this->hasMany('App\Models\BlogImage');
//    }
}
