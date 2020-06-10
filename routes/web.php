<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('welcome');
}) -> name('home');



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


Route::get('/pasta/{id}', function ($id) {
    $cards = config('pasta');
    $card = $cards[$id];
    return view('showPasta', compact('card'));
}) -> name('showPasta');
