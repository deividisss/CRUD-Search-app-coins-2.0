<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KolekcineMoneta extends Model
{
    protected $guarded = [];
    public function coin(){
        return $this->belongsTo(Coin::class);
    }
}
