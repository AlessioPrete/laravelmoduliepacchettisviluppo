<?php

use alessioprete\BaseApp\app\Http\Controllers\AdminController;
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

Route::group(['namespace' => 'alessioprete\BaseApp\app\Http\Controllers', 'middleware' => config('alessioprete.base.web_middleware', 'web'), 'prefix' => 'admin'], function ()
{
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('login', 'auth\LoginController@showLoginForm')->name('auth.login');
    Route::post('login', 'auth\LoginController@login');
    Route::get('logout', 'auth\LoginController@logout')->name('logout');
    Route::get('creautetnte', function (){ return view(alessioprete_view('newuser'));})->name('creautente');

    Route::get('users', [AdminController::class, 'usersShow'])->name('utenti');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('', [AdminController::class, 'dashboard'])->name('home');

    Route::get('sandbox', function (){
        return view(alessioprete_view('sandbox'));
    });
    Route::get('iconmoon', function (){
        return view(alessioprete_view('iconmoon'));
    });
});

