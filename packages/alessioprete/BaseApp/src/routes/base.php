<?php

use alessioprete\BaseApp\app\Http\Controllers\AdminController;
use alessioprete\BaseApp\app\Http\Controllers\Auth\LoginController;
use alessioprete\BaseApp\app\Http\Controllers\Auth\RegisterController;
use alessioprete\BaseApp\app\Http\Controllers\Auth\RolePermissionController;
use alessioprete\BaseApp\app\Http\Controllers\categorieController;
use alessioprete\BaseApp\app\Http\Controllers\pagesController;
use alessioprete\BaseApp\app\Http\Controllers\prodottiController;
use alessioprete\BaseApp\app\Http\Controllers\qrcodegenerate;
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
    Route::post('login', [LoginController::class, 'login']);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

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
    Route::get('newpage', [pagesController::class, 'createPage'])->name('newpage');
    Route::get('editpage/{id}',[pagesController::class, 'editPage'])->name('editpage');
    Route::post('storeeditpage', [pagesController::class, 'storeedit'])->name('storepageedit');
    Route::post('storepage', [pagesController::class, 'storePage'])->name('storepage');
    Route::post('deletepage', [pagesController::class, 'destroyPage'])->name('destroypage');

    Route::get('categorie', [categorieController::class, 'index'])->name('admincategorie');
    Route::get('nuovacategoria', [categorieController::class, 'nuovacategoria'])->name('nuovacategoria');
    Route::post('storecategoria', [categorieController::class, 'storecategoria'])->name('storecategoria');
    Route::get('editcategoria/{id}', [categorieController::class, 'editcategoria'])->name('editcategoria');
    Route::post('destroycategoria', [categorieController::class, 'destroycategoria'])->name('destroycategoria');
    Route::post('storeeditcategoria', [categorieController::class, 'storeedit'])->name('storeeditcategoria');

    Route::get('prodotti', [prodottiController::class, 'index'])->name('prodotti');
    Route::get('nuovoprodotto', [prodottiController::class, 'newProdotto'])->name('nuovoprodotto');
    Route::get('editprodotto/{id}', [prodottiController::class, 'editprodotto'])->name('modificaprodotto');
    Route::post('storenuovoprodotto', [prodottiController::class, 'storePrdodotto'])->name('storeprodotto');
    Route::post('destroyprodotto', [prodottiController::class, 'destroyprodotto'])->name('destroyprodotto');
    Route::post('updateprodotto', [prodottiController::class, 'storemodificaprodotto'])->name('storemodificaprodotto');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('', [AdminController::class, 'dashboard'])->name('home');

    Route::get('sandbox', function (){
        return view(alessioprete_view('sandbox'));
    });
    Route::get('sandbox2', [pagesController::class, 'sandbox'])->name('sandbox2');
    Route::get('iconmoon', function (){
        return view(alessioprete_view('iconmoon'));
    });
    Route::get('/qrcode', [qrcodegenerate::class, 'index'])->name('qrcode');
    Route::get('/qrcode/newurl', [qrcodegenerate::class, 'qrcodeurl'])->name('qrcodeurl');
    Route::get('/qrcode/new', [qrcodegenerate::class, 'seleziona'])->name('newqr');
    Route::post('/qrcode/storenew', [qrcodegenerate::class, 'store_qrSite'])->name('storepage');
});

Route::group(['middleware' => 'web'], function (){
    Route::get('/', function () {
        $categorie = \alessioprete\BaseApp\app\Models\categorie::all();
        return view(alessioprete_view('frontend.index'), compact('categorie')); });
    Route::get('/pagina/{slug}', [pagesController::class, 'pagina']);
    Route::get('/ilmaestro', function () { return view(alessioprete_view('frontend.ilmaestro')); })->name('ilmaestro');
    Route::get('/team', function (){ return view(alessioprete_view('frontend.ilteam')); })->name('ilteam');
    Route::get('/categorie', function () {
        $categorie = \alessioprete\BaseApp\app\Models\categorie::all();
        return view(alessioprete_view('frontend.categorie'), compact('categorie'));
    })->name('categorie');
    Route::get('/categorie/{slug}', function ($slug) {
        $categorie = \alessioprete\BaseApp\app\Models\categorie::all();
        $categoria = \alessioprete\BaseApp\app\Models\categorie::where('slug', '=', $slug)->first();
        return view(alessioprete_view('frontend.categorie'), compact('categorie', 'slug', 'categoria'));
    })->name('categorieslug');
    Route::get('/categorie-griglia', function () { return view(alessioprete_view('frontend.categorie_griglia'));})->name('categoriegriglia');
    Route::get('/prodotto', function () { return view(alessioprete_view('frontend.prodotto'));})->name('prodotto');
    Route::get('/prodotto/{slug}', [prodottiController::class, 'viewprodotto']);
    Route::get('/pasticcerie', function () {return view(alessioprete_view('frontend.pasticcerie'));})->name('pasticcerie');
});

//Route per QrCode
Route::group(['middleware' => 'web', 'prefix' => 'qr'], function (){
    Route::get('/{slug}', function ($slug){
        return 'qrcode->'.$slug;
    });
});
