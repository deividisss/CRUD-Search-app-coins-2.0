@extends('layout')

@section('content')

        <h1 class="title">Redaguoti monetą</h1>

    
    <form method="POST" action="/coins/{{$coin->id}}" style="margin-bottom: 0.5em">
        @method('PATCH')
        @csrf
        {{-- {{ method_field('PATCH') }}
        {{ csrf_field() }} --}}


        {{-- <div class="field">
            <label for="title" class="label">Title</label>
            <div class="controll">
                <input type="text" class="input" name="title" placeholder="" value="{{$coin->title}}">
            </div>
        </div> --}}
       
        <div class="field">
            <label for="pavadinimas" class="label">Pavadinimas</label>
            <div class="controll">
                <input type="string" class="input" name="pavadinimas" placeholder="" value="{{$coin->pavadinimas}}" required>
            </div>
        </div>
        
        <div class="field">
            <label for="salis" class="label">Šalis</label>
            <div class="controll">
                <input type="string" class="input" name="salis" placeholder="" value="{{$coin->salis}}" required>
            </div>
        </div>
       
        <div class="field">
            <label for="kiekis" class="label">Kiekis</label>
            <div class="controll">
                <input type="number" class="input is-roundedl" name="kiekis" placeholder="" value="{{$coin->kiekis}}" required>
            </div>
        </div>
       
        <div class="field">
            <label for="metai" class="label">Metai</label>
            <div class="controll">
                <input type="date" class="input is-roundedl" name="metai" placeholder="" value="{{$coin->metai}}" required>
            </div>
        </div>

        {{-- <div class="field">
            <label for="description" class="label">description</label>
            <div class="control">
                <textarea name="description" id="" cols="30" rows="10" class="textarea">{{$coin->description}}</textarea>
            </div>
        </div> --}}

         <div class="field">
            <div class="controll">
                <button type="submit" class="button is-link">Update Coin</button>
             </div>
        </div>

    </form>

    <form method="POST" action="/coins/{{$coin->id}}">
        @method('DELETE')
        @csrf
        {{-- {{ method_field('DELETE') }}
        {{ csrf_field() }} --}}
        <div class="field">
                <div class="controll">
                    <button type="submit" class="button is-danger">Delete Coin</button>
                 </div>
        </div>

    </form>
@endsection