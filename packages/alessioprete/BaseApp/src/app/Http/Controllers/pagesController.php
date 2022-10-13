<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use alessioprete\BaseApp\app\Http\Controllers\Auth\RegisterController;
use alessioprete\BaseApp\app\Models\page;
use App\Http\Controllers\Controller;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use mysql_xdevapi\CollectionModify;
use Prophecy\Exception\Prediction\AggregateException;

class pagesController extends Controller
{
    public $template = [
        0 =>
        [
            'name' => 'prova_banana',
            'title' => 'ciao',
            'elements' => [
                'field' => 'nome',
                'label' => 'etichetta',
                'value' => '',
                'visible' => '',
                'type' => 'input',
                'store' => 'content'
            ]
        ],
        1 =>
        [
            'name' => 'prova_banana2',
            'title' => 'ciao2',
            'elements' => [
                'field' => 'nome',
                'label' => 'etichetta',
                'value' => '',
                'visible' => '',
                'type' => 'input',
                'store' => 'content'
            ]
    ]];

    public function __construct()
    {
        $this->middleware(alessioprete_middleware());
    }

    public function pagina($page)
    {
        $pagina = page::whereSlug($page)->first();
        if (!$pagina)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        return view(alessioprete_view('frontend.index'), compact('pagina'));
    }

    public function index()
    {
        $pagine = page::paginate(10);
        return view(alessioprete_view('auth.pages.pages'), compact('pagine'));
    }

    public function createPage()
    {
        $json = json_encode($this->template);
        $templates = json_decode($json);
        $templates2 = (object) $this->template;
        $templates3 = (array) $templates;
        $item = ['a', 'name', 'b', 'c', 'd'];
        return view(alessioprete_view('auth.pages.newpage'), compact('templates', 'json', 'templates2', 'templates3', 'item'));
        //dd($templates, $templates2, $templates3);
    }

    public function editPage($id)
    {
        $pagina = page::find($id);
        $editjson = json_decode($pagina->extras);
        $item = ['principale', 'secondario'];
        return view(alessioprete_view('auth.pages.editpage'), compact('pagina','item','editjson'));
    }

    public function storeedit(Request $request)
    {
        $update = page::find($request->id);
        $update->title = $request->title;
        $update->slug = SlugService::createSlug(page::class, 'slug', $request->title);
        $update->template = $request->template;
        $update->content = $request->content;
        $update->extras = json_encode($request->only('description', 'key'));
        $update->save();
        return redirect()->route('pages');
    }

    public function storePage(Request $request)
    {

        $page = new page();
        $page->title = $request->title;
        $page->name = 'prova';
        $page->template = $request->template;
        $page->slug = SlugService::createSlug(page::class, 'slug', $request->title);
        $page->content = $request->content;
        $page->extras = json_encode($request->only('description', 'key'));
        $page->save();
        return redirect()->route('pages');
    }

    public function destroyPage(Request $request)
    {
        page::destroy($request->deleteid);
        return redirect('admin/pages');
    }

    public function sandbox()
    {
        \QrCode::format('png')->size(200)->generate(url('https://www.google.it'), public_path('images/qr.png'));
        $prova = 'images/qr.png';
        return view(alessioprete_view('sandbox2'), compact('prova'));
    }
}
