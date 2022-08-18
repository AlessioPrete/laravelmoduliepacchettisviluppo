<?php

use alessioprete\BaseApp\app\Http\Controllers\AdminController;
use alessioprete\BaseApp\app\Http\Controllers\Auth\LoginController;
use alessioprete\BaseApp\app\Http\Controllers\Auth\RegisterController;
use alessioprete\BaseApp\app\Http\Controllers\Auth\RolePermissionController;
use alessioprete\BaseApp\app\Http\Controllers\pagesController;
use alessioprete\BaseApp\app\Http\Controllers\tasksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| alessioprete\Base Routes
|--------------------------------------------------------------------------
|
| File di routes del pacchetto base
|
*/

Route::group(['namespace' => '\alessioprete\BaseApp\app\Http\Controllers', 'middleware' => config('alessioprete.base.web_middleware', 'web'), 'prefix' => 'admin'], function ()
{
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
    Route::post('register', [RegisterController::class, 'register']);
    //Route::get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('auth.login');
    Route::post('login', '\Auth\LoginController@login');
    Route::get('logout', '\Auth\LoginController@logout')->name('logout');

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

    Route::get('tasks', [tasksController::class, 'tasksShow'])->name('tasks');
    Route::get('newtask', [tasksController::class, 'newtask'])->name('newtask');
    Route::post('storenewtask', [tasksController::class, 'storeNewTask'])->name('storenewtask');
    Route::post('deletetask', [tasksController::class, 'deleteTask'])->name('deletetask');
    Route::post('completatask', [tasksController::class, 'completeTask'])->name('completatask');
    Route::get('taskscompletati', [tasksController::class, 'tasksCompleteShow'])->name('taskscompletati');
    Route::get('edittask/{id}', [tasksController::class, 'editTask'])->name('edittask');
    Route::post('storeedittask', [tasksController::class, 'storeedittask'])->name('storeedittask');

    Route::post('addcustommenu', array('as' => 'haddcustommenu', 'uses' => 'MenuController@addcustommenu'));
    Route::post('deleteitemmenu', array('as' => 'hdeleteitemmenu', 'uses' => 'MenuController@deleteitemmenu'));
    Route::post('deletemenug', array('as' => 'hdeletemenug', 'uses' => 'MenuController@deletemenug'));
    Route::post('createnewmenu', 'MenuController@createnewmenu')->name('hcreatenewmenu');
    Route::post('generatemenucontrol', array('as' => 'hgeneratemenucontrol', 'uses' => 'MenuController@generatemenucontrol'));
    Route::post('updateitem', array('as' => 'hupdateitem', 'uses' => 'MenuController@updateitem'));

    Route::get('menumanager', function (){
        return view(alessioprete_view('auth.menumanager'));
    })->name('menumanager');

    Route::get('pages', [pagesController::class, 'index'])->name('pages');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('', [AdminController::class, 'dashboard'])->name('home');

    Route::get('sandbox', function (){
        return view(alessioprete_view('sandbox'));
    });
    Route::get('iconmoon', function (){
        return view(alessioprete_view('iconmoon'));
    });
});

