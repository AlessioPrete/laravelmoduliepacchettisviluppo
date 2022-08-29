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

class pagesController extends Controller
{
    public $template = [
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
    public function index()
    {
        return view(alessioprete_view('auth.pages.pages'));
    }

    public function createPage()
    {
        $json = json_encode($this->template);
        $templates = json_decode($json);
        //$templates = (object) $this->template;
        $templates2 = $templates->toArray();
        //return view(alessioprete_view('auth.pages.newpage'), compact('templates', 'json'));
        dd($templates2);
    }

    public function storePage(Request $request)
    {
        $page = new page();
        $page->title = $request->title;
        $page->name = 'prova';
        $page->template = rand(16, 16);
        $page->slug = SlugService::createSlug(page::class, 'slug', $request->title);
        $page->save();
        return redirect()->route('pages');
    }

    public function sandbox()
    {
        $prova = 'titolo di prova';
        return Str::slug($prova);
    }
}
