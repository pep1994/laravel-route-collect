<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Pasta;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('putPastaDB', function () {
    $cards = config('pasta');
    foreach ($cards as $card) {
        $pasta = new Pasta();
        $pasta->src = $card['src'];
        $pasta->titolo = $card['titolo'];
        $pasta->tipo = $card['tipo'];
        $pasta->cottura = $card['cottura'];
        $pasta->peso = $card['peso'];
        $pasta->descrizione = $card['descrizione'];
        $pasta->save();
    }
})->describe('Update PastaDB');
