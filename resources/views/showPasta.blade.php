@extends('layout.mainLayout')

@section('content')
    <div class="card bg-dark text-black">
        <img class="card-img" src=" {{ $card['src'] }} " alt=" {{ $card['titolo'] }} ">
        <div class="card-img-overlay">
            <h5 class="card-title">{{ $card['titolo'] }}</h5>
            <p class="card-text">{!! $card['descrizione'] !!}</p>
            @switch($card['tipo'])
                @case('lunga')
                    <a href="{{ route('pastaLunga') }}">Torna alle scelte di pasta lunga</a><br>
                    <a href=" {{ route('pasta')}}">Tutti i tipi di pasta</a>
                    @break
                @case('corta')
                    <a href="{{ route('pastaCorta') }}">Torna alle scelte di pasta corta</a><br>
                    <a href=" {{ route('pasta')}}">Tutti i tipi di pasta</a>
                    @break
                @case('cortissima')
                    <a href="{{ route('pastaCortissima') }}">Torna alle scelte di pasta cortissima</a><br>
                    <a href=" {{ route('pasta')}}">Tutti i tipi di pasta</a>
                    @break
                @default   
                    <a href="{{ route('home') }}">Torna alla home</a>
            @endswitch
        </div>
    </div>
@endsection