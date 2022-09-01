<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use alessioprete\BaseApp\app\Models\prodotto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class prodottiController extends Controller
{
    public function index()
    {
        $prodotti = prodotto::all();
        return view(alessioprete_view('auth.prodotti.prodotti'), compact('prodotti'));
    }

    public function newProdotto()
    {
        return view(alessioprete_view('auth.prodotti.newprodotto'));
    }

    public function storePrdodotto(Request $request)
    {
        $nuovoprodotto = new prodotto();
        $nuovoprodotto->name = $request->title;
        $nuovoprodotto->slug = $request->slug;
        $nuovoprodotto->prezzo = $request->prezzo;
        $nuovoprodotto->descrizione = $request->content;
        $nuovoprodotto->extras = json_encode($request->only('disponibilita', 'description', 'key'));
        $nuovoprodotto->save();
        return redirect()->route('prodotti');
    }

    public function editprodotto($id)
    {
        $update = prodotto::find($id);
        $jsondata = json_decode($update->extras);
        return view(alessioprete_view('auth.prodotti.editprodotto'), compact('update', 'jsondata'));
    }

    public function storemodificaprodotto(Request $request){
        $update = prodotto::find($request->id);
        $update->name = $request->title;
        $update->slug = $request->slug;
        $update->prezzo = $request->prezzo;
        $update->descrizione = $request->content;
        $update->extras = json_encode($request->only('disponibilita', 'description', 'key'));
        $update->save();
        return redirect()->route('prodotti');
        //return dd($update);
    }

    public function destroyprodotto(Request $request)
    {
        prodotto::destroy($request->deleteid);
        return redirect()->route('prodotti');
    }

    public function viewprodotto($slug) {
        $prodotto = prodotto::whereSlug($slug)->first();
        //return dd($prodotto);
        return view(alessioprete_view('frontend.prodotto'), compact('prodotto'));
    }
}
