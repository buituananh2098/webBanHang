<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $table   = 'customers';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];
    public function address()
    {
        return $this->belongsTo('App\Models\CustomerAddress', 'address_id');
    }
}
