<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Traits\DeleteModelTrait;

class AdminRoleController extends Controller
{
    use DeleteModelTrait;
    public function index(Role $role)
    {
        $roles = Role::paginate(5);
        return view('admin.role.index', [
            'roles' => $roles,
        ]);
    }

    public function create(Permission $permission)
    {
        $permissionParents = $permission->where('parent_id', 0)->get();
        return view('admin.role.add', [
            'permissionParents' => $permissionParents,
        ]);
    }

    public function store(Request $request, Role $role)
    {

        $role = Role::create([
            'name' => $request->name,
            'display_name' => $request->display_name,
        ]);

        $role->permissions()->attach($request->permission_id);

        return redirect()->route('roles.index');
    }

    public function edit(Role $role, Permission $permission)
    {
        $permissionParents = $permission->where('parent_id', 0)->get();
        $permissions = $role->permissions;
        return view('admin.role.edit', [
            'role' => $role,
            'permissionParents' => $permissionParents,
            'permissions' => $permissions,
        ]);
    }

    public function update(Role $role, Request $request)
    {

        $role->update([
            'name' => $request->name,
            'display_name' => $request->display_name
        ]);
        
        $role->permissions()->sync($request->permission_id);
        return redirect()->route('roles.index');
    }

    public function delete(Role $role) {
        return $this->deleteModelTrait($role, $role->id);
    }
}
