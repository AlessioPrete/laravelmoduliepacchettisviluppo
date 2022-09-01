<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use alessioprete\BaseApp\app\Models\categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categorieController extends Controller
{
    public function __construct()
    {
        $this->middleware(alessioprete_middleware());
    }

    public function index()
    {
        $categorie = categorie::all();
        return view(alessioprete_view('auth.categorie.categorie'), compact('categorie'));
    }

    public function nuovacategoria()
    {
        return view(alessioprete_view('auth.categorie.newcategoria'));
    }

    public function storecategoria(Request $request)
    {
        $nuova = new categorie();
        $nuova->name = $request->title;
        $nuova->slug = $request->slug;
        $nuova->save();
        return redirect()->route('admincategorie');
    }

    public function editcategoria($id)
    {
        $categoria = categorie::find($id);
        return view(alessioprete_view('auth.categorie.editcategoria'), compact('categoria'));
    }

    public function storeedit(Request $request)
    {
        $update = categorie::find($request->id);
        $update->name = $request->title;
        $update->slug = $request->slug;
        $update->save();
        return redirect()->route('admincategorie');
    }

    public function destroycategoria(Request $request)
    {
        categorie::destroy($request->deleteid);
        return redirect()->route('admincategorie');
    }
}
