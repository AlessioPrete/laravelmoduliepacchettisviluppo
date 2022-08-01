<?php

use alessioprete\BaseApp\app\Http\Controllers\Auth\RegisterController;
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
        return view(alessioprete_view('layouts.plain'));});

});
Route::group(['namespace' => 'alessioprete', 'middleware' => 'web'], function (){
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'create']);
});

