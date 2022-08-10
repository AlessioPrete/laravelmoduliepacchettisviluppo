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
        $permessi = Permission::all();
        $ruoli = Role::withCount('users')->get();
        return view(alessioprete_view('auth.roles.roles'), compact('ruoli'));
        //return dd($ruoli);
    }

    public function roleNew()
    {
        $permessi = Permission::all();
        return view(alessioprete_view('auth.roles.newrole'), compact('permessi'));
    }

    public function roleNewStore(Request $request)
    {
        Role::create(['name' => $request->name, 'guard_name' => 'aprete']);
        return redirect('admin/roles');
    }

    public function roleEdit($id)
    {
        $role = Role::find($id);
        return view(alessioprete_view('auth.roles.editrole'), compact('role'));
    }

    public function roleEditStore(Request $request)
    {
        Role::find($request->id)->update(['name' => $request->name]);
        return redirect('admin/roles');
    }
    public function roleDelete(Request $request)
    {
        Role::destroy($request->deleteid);
        return redirect('admin/roles');
    }
}
