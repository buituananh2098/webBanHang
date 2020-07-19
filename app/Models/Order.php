<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table   = 'orders';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function order_item()
    {
        return $this->hasMany('App\Models\OrderItem');
    }
}
