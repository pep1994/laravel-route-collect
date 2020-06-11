@extends('layout.mainLayout')

@section('content')

<h1>Pasta {{$pastaGenerica[0]['tipo']}}</h1>

<div class="container">
    <div class="row justify-content-center">

        @foreach ($pastaGenerica as $pasta)
            <div class="col-md-4 align-items-stretch mb-4 mt-4">
                <div class="card text-left h-100" style="width: 18rem;">
                    <img class="card-img-top" src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    <div class="card-body">
                        <h6 class="card-title text-center">{{$pasta['titolo']}}</h6>
                        @php
                            $descr = $pasta['descrizione'];
                            if (strlen($descr) > 120) {
                              $descr = substr($pasta['descrizione'], 0, 100) . "...";
                            } 
                        @endphp
                        <p class="card-text">{{$descr}}</p>
                        <a href="{{ route('showPasta', $pasta['id'])}}" class="btn btn-primary">More details</a>
                    </div>
                </div>
            </div>
            
        @endforeach
    </div>
</div>
@endsection