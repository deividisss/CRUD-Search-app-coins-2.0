@extends('layout')

@section('content')
{{-- @include('coins/lol') --}}

    <h1 class="title">{{$coin->pavadinimas}}</h1>
    <div class="box">
            <p class="is-size-4"><strong>Šalis:</strong> {{$coin->salis}}</p>


            {{-- <p>{{$coin->description}}</p> --}}
            <p class="is-size-4"><strong>Kiekis: </strong>{{$coin->kiekis}}</p>


            <hr>
            
        <div class="content is-size-7" >Metai {{$coin->metai}}</div>
        



        @if ($coin->proginesMonetas->count())
            <p class="is-size-4"><strong>Proginės versijos:</strong></p>
            <br>
            <div class="box">
                
                    @foreach ($coin->proginesMonetas as $progineMoneta)

                            <form method="POST" action="/colected-proginesMonetas/{{ $progineMoneta->id }}">
                                @if ($progineMoneta->colected)
                                    @method('DELETE')
                                @endif
                                {{-- @method('PATCH') --}}
                                @csrf

                                <label class="checkbox {{ $progineMoneta->colected ? 'is-colected' : ''}}" 
                                    for="colected">

                                    <input type="checkbox" name="colected" onChange="this.form.submit()" 
                                    {{ $progineMoneta->colected ? 'checked' : ''}}
                                    >
                                    {{$progineMoneta->description }}
                                    <?= $progineMoneta->colected ? 
                                    '<strong>Kolekcijoje &#9989</strong>' : 
                                    '<strong>Trūksta &#10060</strong>' ?>
                                </label>

                            </form>

                    @endforeach

                    <form method="POST" action="/coins/{{$coin->id}}/proginesMonetas">
                        @csrf
                            <div class="field">
                
                                <label class="label is-size-5" for="description">Pridėti naują proginę monetą</label>
                
                                <div class="control">
                                    <input type="text" class="input" name="description" placeholder="Nauja proginė moneta" required>
                                </div>
                
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-success">Pridėti</button>
                                </div>
                            </div>
                            
                            @include('errors')
                        
                        </form>    


            </div>
        @endif



        @if ($coin->kolekcinesMonetas->count())
            <p class="is-size-4"><strong>Kolekcinės versijos:</strong></p>
            <br>
            <div class="box">
                
                    @foreach ($coin->kolekcinesMonetas as $kolekcineMoneta)

                            <form method="POST" action="/kolekcinesMonetos/{{ $kolekcineMoneta->id }}">
                                @method('PATCH')
                                @csrf

                                <label class="checkbox {{ $kolekcineMoneta->colected ? 'is-colected' : ''}}" 
                                    for="colected">

                                    <input type="checkbox" name="colected" onChange="this.form.submit()" 
                                    {{ $kolekcineMoneta->colected ? 'checked' : ''}}
                                    >
                                    {{$kolekcineMoneta->title }}
                                    <?= $kolekcineMoneta->colected ? 
                                    '<strong>Kolekcijoje &#9989</strong>' : 
                                    '<strong>Trūksta &#10060</strong>' ?>
                                </label>

                            </form>

                    @endforeach

            </div>
        @endif

        
        <a href="/coins"><button class="button is-link">Atgal</button></a>
     

    </div>

    <p>
            <a href="/coins/{{$coin->id}}/edit"> <button  class="button is-warning">Redaguoti monetą</button></a>
        </p>
    <form method="POST" action="/coins/{{$coin->id}}">
        @method('DELETE')
        @csrf
        {{-- {{ method_field('DELETE') }}
        {{ csrf_field() }} --}}
        <div class="field" style="margin-top: 0.5em">
                <div class="controll">
                    <button type="submit" class="button is-danger">Ištrinti monetą</button>
                </div>
        </div>

@endsection