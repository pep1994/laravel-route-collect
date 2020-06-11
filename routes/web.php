<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('welcome');
}) -> name('home');

function getPasta($pastaType){
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


Route::get('/pasta', function () {
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
}) -> name('pasta');


Route::get('/pastaLunga', function () {
  $pastaGenerica = getPasta('lunga');
  return view('tipoPasta', compact('pastaGenerica'));
}) -> name('pastaLunga');

Route::get('/pastaCorta', function () {
  $pastaGenerica = getPasta('corta');
  return view('tipoPasta', compact('pastaGenerica'));
}) -> name('pastaCorta');

Route::get('/pastaCortissima', function () {
  $pastaGenerica = getPasta('cortissima');
  return view('tipoPasta', compact('pastaGenerica'));
}) -> name('pastaCortissima');


Route::get('/pasta/{id}', function ($id) {
    $cards = config('pasta');
    $card = $cards[$id];
    return view('showPasta', compact('card'));
}) -> name('showPasta');


