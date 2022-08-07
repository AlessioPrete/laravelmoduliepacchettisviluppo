<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    protected $data = []; // the information we send to the view
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(alessioprete_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = 'Dashboard'; // set the page title
        $this->data['breadcrumbs'] = [
            'Amministrazione'     => alessioprete_url('dashboard'),
            'Dashboard' => false,
        ];

        return view(alessioprete_view('dashboard'), $this->data);
    }
    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(alessioprete_url('dashboard'));
    }

    public function usersShow()
    {
        $utenti = User::all();
        return view(alessioprete_view('users'), compact('utenti'));
    }

    public function creaUtente()
    {
        return view(alessioprete_view('newuser'));
    }

    public function registraUtente(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users']
        ]);
        $registra = new User();
        $registra->name = $request->name;
        $registra->email = $request->email;
        $registra->password = Hash::make($request->password);
        $registra->save();

        return redirect()->back();
    }
}
