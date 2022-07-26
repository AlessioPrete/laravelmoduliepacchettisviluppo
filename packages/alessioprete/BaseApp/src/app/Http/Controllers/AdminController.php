<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        $utenti = User::with('roles')->with('permissions')->get();
        return view(alessioprete_view('users'), compact('utenti'));
    }

    public function creaUtente()
    {
        $ruoli = Role::all();
        $permessi = Permission::all();
        return view(alessioprete_view('newuser'), compact('ruoli', 'permessi'));
    }

    public function registraUtente(Request $request)
    {
        $valida = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password'
        ]);

        if ($valida->fails()) {
            return redirect()->back()->withErrors($valida)->withInput();
        }
        else {
            $registra = new User();
            $registra->name = $request->name;
            $registra->email = $request->email;
            $registra->password = Hash::make($request->password);
            $registra->save();

            $registra->syncRoles($request->ruolo);
            $registra->syncPermissions($request->permesso);
            return redirect('admin/users');
        }
    }

    public function eliminaUtente(Request $request)
    {
        User::find($request->deleteid)->delete();
        return back()->with(['success' => 'Eliminato con successo']);
    }

    public function editUtente($id)
    {
        $user = User::find($id);
        $user->getRoleNames();
        $user->getAllPermissions();
        $ruoli = Role::all();
        $permessi = Permission::all();
        return view(alessioprete_view('edituser'), compact('user', 'ruoli', 'permessi'));
        //return dd($user);
    }

    public function editUtenteStore(Request $request)
    {
        $registra = User::find($request->id);
        if (isset($request->password)) {
            $valida = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email|unique:users,email,'.$request->id,
                'password' => 'required|confirmed',
                'password_confirmation' => 'required|same:password'
            ]);
            if ($valida->fails()) {
                return redirect()->back()->withErrors($valida)->withInput();
            }
            else {
                $registra->name = $request->name;
                $registra->email = $request->email;
                $registra->password = Hash::make($request->password);
                $registra->save();
                $registra->syncRoles($request->role);
                $registra->syncPermissions($request->permesso);
                return redirect('admin/users');
            }
        }

        else {
            $valida = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email|unique:users,email,'.$request->id
            ]);

            if ($valida->fails()) {
                return redirect()->back()->withErrors($valida)->withInput();
            }
            else {
                $registra = User::find($request->id);
                $registra->name = $request->name;
                $registra->email = $request->email;
                $registra->save();
                $registra->syncRoles($request->role);
                $registra->syncPermissions($request->permesso);
                return redirect('admin/users');
            }
        }
    }
}
