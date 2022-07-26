<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| alessioprete\Base Routes
|--------------------------------------------------------------------------
|
| File di routes del pacchetto base
|
*/

Route::group(['middleware' => 'web', 'prefix' => 'admin'], function ()
{
    Route::get('', function (){
        $variabile = 'Bravo Scemo '.config('alessioprete.base.campoTest');
        return $variabile;});
});
