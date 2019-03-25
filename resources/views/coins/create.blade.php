
     @extends('layout')

        @section('content')
        <h1 class="title">Sukurti monetą</h1>

        <form method="POST" action="/coins">

        {{ csrf_field() }}
            {{-- <div>
                <input type="text" name="title" placeholder="Coin title">
            </div> --}}

            <div class="field">
                    <label for="pavadinimas" class="label">Pavadinimas</label>
                        <div class="controll">
                            <input class="input {{ $errors->has('pavadinimas') ? 'is-danger' : '' }}" 
                            type="string" name="pavadinimas" value="{{ old('pavadinimas')}} " required>
                        </div>
                </div>

                <div class="field">
                        <label for="salis" class="label">Šalis</label>
                            <div class="controll">
                                <input class="input {{ $errors->has('salis') ? 'is-danger' : '' }}"
                                 type="string" name="salis" value="{{ old('salis')}} " required>
                            </div>
                    </div>

                <div class="field">
                    <label for="kiekis" class="label">Kiekis</label>
                        <div class="controll">
                            <input class="input is-roundedl {{ $errors->has('kiekis') ? 'is-danger' : '' }}"
                             type="number" name="kiekis" required>
                        </div>
                </div>

     

                <div class="field">
                    <label for="metai" class="label">Metai</label>
                        <div class="controll">
                            <input class="input {{ $errors->has('metai') ? 'is-danger' : '' }}" 
                            type="date" name="metai" required>
                        </div>
                </div>

                {{-- <div class="field">
                    <label for="description" class="label">Aprašymas</label>
                        <div class="control">
                            <textarea name="description" placeholder="Coin description" class="textarea"></textarea>
                        </div>
                </div> --}}

                <div class="field">
                    <button type="submit" class="button is-primary">Pridėti monetą</button>
                </div>

                @include('errors')
        </form>

      @endsection
