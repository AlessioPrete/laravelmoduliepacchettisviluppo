<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use alessioprete\BaseApp\app\Http\Controllers\Auth\RegisterController;
use alessioprete\BaseApp\app\Models\page;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class pagesController extends Controller
{

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
        return view(alessioprete_view('auth.pages.newpage'));
    }

    public function storePage(Request $request)
    {
        $page = new page();
        $page->title = $request->title;
        $page->name = 'prova';
        $page->template = rand(16, 16);
        $page->slug = $page->title;
        $page->save();
        return redirect()->route('pages');
    }

    public function sandbox()
    {
        $prova = 'titolo di prova';
        return Str::slug($prova);
    }
}
