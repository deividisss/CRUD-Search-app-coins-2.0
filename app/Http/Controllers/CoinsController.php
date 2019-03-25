<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Coin;

class CoinsController extends Controller
{   
    public function index(){

        $coins = \App\Coin::orderby('id','desc')->paginate(15);
        // $coins = \App\Coin::all();

        //$posts = Post::orderBy('title','asc')->paginate(10);

        return view('coins.index', ['coins' => $coins]);
    }

    public function create(){

        return view('coins.create');

    }

    public function store(){

        $attributes = request()->validate([
            
            'pavadinimas' => ['required', 'min:2'],
            'metai' => 'required',
            'salis' => ['required', 'min:3'],
            'kiekis' => ['required', 'numeric', 'min:0', 'not_in:0']

        ]);

        Coin::create($attributes);


        // Coin::create([
        //     'description' => request('description'),
        //     'kiekis' => request('kiekis')
            
        // ]);



        // $coin = new Coin();
        // // $coin->title = request('title');
        // $coin->description = request('description');
        // $coin->kiekis = request('kiekis');
        // $coin->save();

        return redirect('/coins');

    }

    public function edit(Coin $coin) {
        // $coin = Coin::findorFail($id);
        return view('coins.edit', compact('coin'));
    }

    public function update(Coin $coin){

        $coin->update(request(['pavadinimas',
        'metai',
        'salis',
        'kiekis',]));
        // $coin = Coin::findorFail($id);

        // $coin->description = request('description');
        // $coin->kiekis = request('kiekis');
        // $coin->save();

        return redirect('/coins');
    }

    public function destroy(Coin $coin){
        
        //  $coin = Coin::findorFail($id)->delete();
        $coin->delete();
        return redirect('/coins');
    }

    public function show(Coin $coin){

        //$coin = Coin::findorFail($id);
        return view('coins.show', compact('coin'));
    }
}
