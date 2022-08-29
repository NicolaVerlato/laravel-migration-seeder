@extends('layouts.app')

@section('main')
    <h1>I miei viaggi</h1>

    @foreach ($trips as $trip)
        <h3>
            {{ $trip->name }}
        </h3>

        <div>
            Destinazione: {{ $trip->destination }}
        </div>
        <div>
            Data di Partenza: {{ $trip->departure_date }}
        </div>
        <div>
            Durata: {{ $trip->duration }} giorni
        </div>
        <div>
            <i>{{ $trip->description }}</i>
        </div>
        <div>
            Prezzo: {{ $trip->price }} &euro;
        </div>
    @endforeach
@endsection