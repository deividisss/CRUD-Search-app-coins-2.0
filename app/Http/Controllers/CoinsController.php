<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Coin;
use App\Services\Twitter;


class CoinsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $coins = Coin::where('owner_id', auth()->id())->get(); //select * from coins where owner_id =4 ;

        // auth()->id()//44
        // auth()->user()//user
        // auth()->check()// bloolean


        // $coins = \App\Coin::orderby('id','desc')->paginate(15);//good

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

        $attributes['owner_id'] = auth()->id();

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

        //  $this->authorize('update', $coin);

        //$coin = Coin::findorFail($id);
        // abort_unless(auth()->user()->owns($coin), 403);
        // abort_if($coin->owner_id !== auth()->id(), 403);
        // abort_unless(\Gate::allows('update', $coin), 403);



        return view('coins.show', compact('coin'));
    }
}
