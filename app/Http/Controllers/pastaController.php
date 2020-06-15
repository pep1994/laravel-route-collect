<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pastaController extends Controller
{
    public function showPasta () {
        $cards = config('pasta');
        $collection = collect($cards);
        $collection = $collection -> map( function($item, $index){
        $item['id'] = $index;
        return $item;
        });

        $lunga = $collection -> where('tipo', 'lunga');
        $corta = $collection -> where('tipo', 'corta');
        $cortissima = $collection -> where('tipo', 'cortissima');

        return view('pasta', compact('lunga', 'corta', 'cortissima'));
    }

    public function getPasta ($pastaType) {
        $cards = config('pasta');
        $collection = collect($cards);
        $pastaGenerica = [];
      
        $collection = $collection -> map( function($item, $index){
          $item['id'] = $index;
          return $item;
        });
      
        $cards = $collection;
      
        foreach ($cards as $card) {
          if ($card['tipo'] == $pastaType) {
            array_push($pastaGenerica, $card);
          }
        }
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
        $card = $cards[$id];
        return view('showPasta', compact('card'));
    }
}
