<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Sluggable;

class pagesController extends Controller
{
    public function __construct()
    {
        $this->middleware(alessioprete_middleware());
    }
    public function index()
    {
        return view(alessioprete_view('auth.pages'));
    }

    public function createPage()
    {

    }
}
