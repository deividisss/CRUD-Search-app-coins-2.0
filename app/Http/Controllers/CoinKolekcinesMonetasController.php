<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KolekcineMoneta;

class CoinKolekcinesMonetasController extends Controller
{
    public function update(kolekcineMoneta $kolekcineMoneta){
        
        $kolekcineMoneta->update([
            'colected' => request()->has('colected')
        ]);

            return back();

    }
}
