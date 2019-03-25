<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProgineMoneta;
use App\Coin;

class CoinProginesMonetasController extends Controller
{

    public function store(Coin $coin){
        
       $atributes = request()->validate(['description' => 'required']);

        $coin->addProgineMoneta($atributes);

        // $coin->addProgineMoneta(request('description'));
        
         return back();

    }

    public function update(ProgineMoneta $progineMoneta){
        
        $progineMoneta->update([
            'colected' => request()->has('colected')
        ]);

            return back();

    }
}
