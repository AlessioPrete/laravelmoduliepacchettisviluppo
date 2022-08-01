<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use Illuminate\Routing\Controller;

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
}
