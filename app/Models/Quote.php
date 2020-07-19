<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
    use SoftDeletes;

    protected $table   = 'quotes';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function quote_item()
    {
        return $this->hasMany('App\Models\QuoteItem');
    }
}
