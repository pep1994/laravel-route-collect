@extends('layout.mainLayout')

@section('content')
    <div class="card bg-dark text-black">
        <img class="card-img" src=" {{ $card['src'] }} " alt=" {{ $card['titolo'] }} ">
        <div class="card-img-overlay">
            <h5 class="card-title">{{ $card['titolo'] }}</h5>
            <p class="card-text">{!! $card['descrizione'] !!}</p>
        </div>
    </div>
@endsection