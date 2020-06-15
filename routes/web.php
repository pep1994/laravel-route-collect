<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('welcome');
}) -> name('home');

Route::get('/pasta', 'pastaController@showPasta') -> name('pasta');

Route::get('/pastaLunga', "pastaController@getPastaLunga") -> name('pastaLunga');

Route::get('/pastaCorta', "pastaController@getPastaCorta") -> name('pastaCorta');

Route::get('/pastaCortissima', "pastaController@getPastaCortissima") -> name('pastaCortissima');

Route::get('/pasta/{id}', "pastaController@singlePasta") -> name('showPasta');


