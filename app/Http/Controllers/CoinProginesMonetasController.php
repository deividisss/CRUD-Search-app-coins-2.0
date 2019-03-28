<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProgineMoneta;
use App\Coin;

class CoinProginesMonetasController extends Controller
{

    public function store(Coin $coin){
        
        $coin->addProgineMoneta(
            request()->validate(['description' => 'required'])
        );
    
        // $coin->addProgineMoneta(request('description'));
        
         return back();

    }

}
