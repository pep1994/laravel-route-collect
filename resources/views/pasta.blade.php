@extends('layout.mainLayout')

@section('content')
    <h1>Lunga:</h1>

    <ul>
        @foreach ($lunga as $card)
            <li>
                <a href="{{ route('showPasta', $card['id']) }}">{{ $card['titolo'] }}</a>
            </li>
        @endforeach
    </ul>

    <h1>Corta:</h1>

    <ul>
        @foreach ($corta as $card)
            <li>
                <a href="{{ route('showPasta', $card['id']) }}">{{ $card['titolo'] }}</a>
            </li> 
        @endforeach
    </ul>

    <h1>Cortissima:</h1>

    <ul>
        @foreach ($cortissima as $card)
            <li>
                <a href="{{ route('showPasta', $card['id']) }}">{{ $card['titolo'] }}</a>
            </li>
        @endforeach
    </ul>
@endsection