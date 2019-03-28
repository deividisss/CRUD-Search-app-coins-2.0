<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgineMoneta extends Model
{
    protected $guarded = [];

    public function coin(){
        return $this->belongsTo(Coin::class);
    }
    
    public function colected($colected = true){
        $this->update(compact('colected'));

    }

    public function notcolected(){
        $this->colected(false);
    }

}
