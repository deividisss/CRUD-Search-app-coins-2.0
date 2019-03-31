@extends('layout')


@section('content')
{{-- <form action="/search" method="POST" role="search">
  {{ csrf_field() }}
  <div class="input-group">
      <input type="text" class="form-control" name="q"
          placeholder="Search users"> <span class="input-group-btn">
          <button type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-search">Search</span>
          </button>
      </span>
  </div>
</form> --}}

{{-- @if (isset($details))
<p> The Search results for your query <b> {{ $query }} </b>
  <h1>Sample Coins</h1>
@php
$coins = $details;
 $details = $coins;   
@endphp
  @foreach ($coins as $coin)
  <ul class="list-item" >
      <a href="/coins/{{$coin->id}}" >
        <li class="">{{$coin->pavadinimas}}</li>
      </a>
  </ul>
@endforeach

@endif --}}

    <h1 class="title" style="margin-bottom: 0.2em">Monetų sąrašas</h1>

    @foreach ($coins as $coin)
        <ul class="list-item" >
            <a href="/coins/{{$coin->id}}" >
              <li class="">{{$coin->pavadinimas}}</li>
            </a>
        </ul>
    @endforeach

    {{-- {{$coins->links()}}//pagination --}}
    <div class="field" style="margin-top: 1em">
      
        <div class="controll">
           
            <a href="/coins/create">
              <button class="button is-primary" >Pridėti monetą</button>
            </a>
         </div>
        
    </div>

@endsection
