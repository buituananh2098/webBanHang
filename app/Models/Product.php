<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table   = 'products';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function detail()
    {
        return $this->hasOne('App\Models\Detail');
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function image()
    {
        return $this->hasMany('App\Models\ImageProduct');
    }

    public function quote()
    {
        return $this->belongsTo('App\Models\Quote');
    }
}
