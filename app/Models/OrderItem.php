<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;

    protected $table   = 'order_item';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function quote()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}
