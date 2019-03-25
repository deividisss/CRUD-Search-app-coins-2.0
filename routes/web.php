<?php

use Illuminate\Support\Facades\Input;
use App\Coin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/search', function() {
    $q = input::get('q');
    //  dd($q);
    if($q != ""){
        $coin = Coin::where('pavadinimas', 'LIKE', '%' . $q . '%')
                        ->orWhere('metai', 'LIKE', '%' . $q . '%')
                        ->orWhere('salis', 'LIKE', '%' . $q . '%')
        ->get();

        if(count($coin) > 0)
        return view('coins.search')->withDetails($coin)->withQuery($q);
    }
    return view('coins.search')->withMessage(" nerasta")->withQuery($q);
});


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/kaskas', function () {
    return view('kaskas.index');
});

/*
    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)

*/
Route::resource('/','CoinsController');
Route::resource('coins','CoinsController');

Route::post('/coins/{coin}/proginesMonetas', 'CoinProginesMonetasController@store');
Route::patch('/proginesMonetos/{progineMoneta}', 'CoinProginesMonetasController@update');

Route::patch('/kolekcinesMonetos/{kolekcineMoneta}', 'CoinKolekcinesMonetasController@update');


// Route::get('/coins', 'CoinsController@index');
// Route::post('/coins', 'CoinsController@store');
// Route::get('coins/{coin}', 'CoinsController@show');
// Route::get('/coins/create', 'CoinsController@create');
// Route::get('/coins/{coin}/edit', 'CoinsController@edit');
// Route::patch('coins/{coin}','CoinsController@update');
// Route::delete('coins/{coin}','CoinsController@destroy');

