<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuoteItem extends Model
{
    use SoftDeletes;

    protected $table   = 'quote_item';
    protected $guarded = [];
    protected $dates   = ['deleted_at'];

    public function quote()
    {
        return $this->belongsToMany('App\Models\Quote');
    }
}
