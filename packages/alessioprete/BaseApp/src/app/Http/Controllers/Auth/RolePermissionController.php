<?php

namespace alessioprete\BaseApp\app\Http\Controllers\Auth;

use alessioprete\BaseApp\app\Library\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class RolePermissionController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(alessioprete_middleware());
    }

    public function permissionShow()
    {
        $permessi = Permission::all();
        return view(alessioprete_view('permission'), compact('permessi'));
    }

    public function permissionNew()
    {
        return view(alessioprete_view('newpermission'));
    }

    public function permissionNewStore(Request $request)
    {
        Permission::create(['name' => $request->name]);
        return redirect('admin/permission');
    }

    public function permissionDelete(Request $request)
    {
        Permission::find($request->deleteid)->delete();
        return redirect('admin/permission');
    }

    public function roleShow()
    {
        $ruoli = Role::withCount('users')->get();
        return view(alessioprete_view('roles'), compact('ruoli'));
        //return dd($ruoli);
    }

    public function roleNew()
    {
        return view(alessioprete_view('newrole'));
    }

    public function roleNewStore(Request $request)
    {
        Role::create(['name' => $request->name]);
        return redirect('admin/permission');
    }
}
