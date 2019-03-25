@extends('layout')


@section('content')
@if (isset($details))

  <h1 class="title">Monetų sąrašas</h1>
  <p> Paieškos <b> {{ $query }} </b>rezultatai</p>
@php
 $coins = $details;
 $details = $coins;   
@endphp
  @foreach ($coins as $coin)
  <ul class="list-item" >
      
        <li class=""><a href="/coins/{{$coin->id}}" ><b>Moneta </a>:
           Pavadinimas </b>{{$coin->pavadinimas}} <b>metai</b> {{$coin->metai}} <b>Kilmės šalis</b> {{$coin->salis}}</li>
     
  </ul>
@endforeach
<div class="field" style="margin-top: 1em">
      
        <div class="controll">
           
            <a href="/coins/create">
              <button class="button is-primary" >Pridėti monetą</button>
            </a>
         </div>
        
    </div>

@elseif(isset($message))
<h1 class="title">Monetų sąrašas</h1>
  <p>Moneta <b> {{ $query }} </b> {{$message}}</p>

<p class="title" style="color:red;"></p>

@endif

@endsection