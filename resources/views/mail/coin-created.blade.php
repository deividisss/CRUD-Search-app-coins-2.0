@component('mail::message')
# Coin

The coin has been created {{$coin->pavadinimas}}.
Salis {{$coin->salis}}
Metai {{$coin->metai}}

@component('mail::button', ['url' => url('/coins/' . $coin->id)])
View Coin
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
