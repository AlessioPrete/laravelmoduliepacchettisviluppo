<?php

use alessioprete\BaseApp\app\Http\Controllers\AdminController;
use alessioprete\BaseApp\app\Http\Controllers\Auth\RegisterController;
use alessioprete\BaseApp\app\Http\Controllers\Auth\RolePermissionController;
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

    Route::get('users', [AdminController::class, 'usersShow'])->name('utenti');
    Route::get('creautente', [AdminController::class, 'creaUtente'])->name('creautente');
    Route::post('registrautente', [AdminController::class, 'registraUtente'])->name('registrautente');
    Route::post('eliminautente', [AdminController::class, 'eliminaUtente'])->name('eliminautente');
    Route::get('editutente/{id}', [AdminController::class, 'editUtente'])->name('editUser');
    Route::post('edituserstore', [AdminController::class, 'editUtenteStore'])->name('edituserstore');

    Route::get('roles', [RolePermissionController::class, 'roleShow'])->name('roles');
    Route::get('newrole', [RolePermissionController::class, 'roleNew'])->name('newrole');
    Route::post('newrolestore', [RolePermissionController::class, 'roleNewStore'])->name('newrolestore');
    Route::get('roleedit/{id}', [RolePermissionController::class, 'roleEdit'])->name('editrole');
    Route::post('roleeditstore', [RolePermissionController::class, 'roleEditStore'])->name('editrolestore');
    Route::post('deleterole', [RolePermissionController::class, 'roleDelete'])->name('roledelete');

    Route::get('permission', [RolePermissionController::class, 'permissionShow'])->name('permission');
    Route::get('newpermission', [RolePermissionController::class, 'permissionNew'])->name('newpermission');
    Route::post('newpermissionstore', [RolePermissionController::class, 'permissionNewStore'])->name('newpermissionstore');
    Route::post('deletepermission', [RolePermissionController::class, 'permissionDelete'])->name('permissiondelete');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('', [AdminController::class, 'dashboard'])->name('home');

    Route::get('sandbox', function (){
        return view(alessioprete_view('sandbox'));
    });
    Route::get('iconmoon', function (){
        return view(alessioprete_view('iconmoon'));
    });
});

