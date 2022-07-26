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
        return view(alessioprete_view('auth.permissions.permission'), compact('permessi'));
    }

    public function permissionNew()
    {
        return view(alessioprete_view('auth.permissions.newpermission'));
    }

    public function permissionNewStore(Request $request)
    {
        Permission::create(['name' => $request->name, 'guard_name' => 'aprete']);
        return redirect('admin/permission');
    }

    public function permissionDelete(Request $request)
    {
        Permission::find($request->deleteid)->delete();
        return redirect('admin/permission');
    }
    //Manca EditPermissions

    public function roleShow()
    {
        $ruoli = Role::withCount('users')->with('permissions')->get();
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
        $ruolo = Role::create(['name' => $request->name, 'guard_name' => 'aprete']);
        $ruolo->syncPermissions($request->role);
        return redirect('admin/roles');
    }

    public function roleEdit($id)
    {
        $role = Role::find($id);
        $check = $role->permissions;
        $permessi = Permission::all();
        return view(alessioprete_view('auth.roles.editrole'), compact('role'), compact('permessi', 'check'));
    }

    public function roleEditStore(Request $request)
    {
        $role = Role::find($request->id);
        $role->syncPermissions($request->role);
        $role->update(['name' => $request->name]);
        return redirect('admin/roles');
    }
    public function roleDelete(Request $request)
    {
        Role::destroy($request->deleteid);
        return redirect('admin/roles');
    }
}
