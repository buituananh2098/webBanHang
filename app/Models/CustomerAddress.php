<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerAddress extends Model
{
    use SoftDeletes;

    protected $table   = 'customer_address';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
