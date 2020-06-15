<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasta;

class pastaController extends Controller
{
    public function showPasta () {
        $cards = Pasta::all();
        $collection = collect($cards);
        $lunga = $collection -> where('tipo', 'lunga');
        $corta = $collection -> where('tipo', 'corta');
        $cortissima = $collection -> where('tipo', 'cortissima');

        return view('pasta', compact('lunga', 'corta', 'cortissima'));
    }

    public function getPasta ($pastaType) {
        $pastaGenerica = Pasta::where('tipo', $pastaType) ->get();
        return $pastaGenerica;
    }

    public function getPastaLunga() {
        $pastaGenerica = $this -> getPasta('lunga');
        return view('tipoPasta', compact('pastaGenerica'));
    }
    public function getPastaCorta() {
        $pastaGenerica = $this -> getPasta('corta');
        return view('tipoPasta', compact('pastaGenerica'));
    }
    public function getPastaCortissima() {
        $pastaGenerica = $this -> getPasta('cortissima');
        return view('tipoPasta', compact('pastaGenerica'));
    }
    public function singlePasta ($id) {
        $cards = config('pasta');
        $card = $cards[$id - 1];
        return view('showPasta', compact('card'));
    }
}
