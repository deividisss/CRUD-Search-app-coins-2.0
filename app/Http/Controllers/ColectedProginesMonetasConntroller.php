<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgineMoneta;

class ColectedProginesMonetasConntroller extends Controller
{
    public function store(ProgineMoneta $progineMoneta){
        $progineMoneta->colected();
        return back();
    }

    public function destroy(ProgineMoneta $progineMoneta){
        $progineMoneta->notcolected();
        return back();
    }
}
