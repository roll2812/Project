<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Traits\DeleteModelTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    use DeleteModelTrait;
    public function index(User $user)
    {
        $users = User::paginate(10);
        return view('admin.user.index', [
            'users' => $users,
        ]);
    }

    public function create(Role $role)
    {
        $roles = Role::get();
        return view('admin.user.add', [
            'roles' => $roles,
        ]);
    }

    public function store(Request $request)
    {

        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->route('users.index');

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('message' . $exception->getMessage() . '----Line: ' . $exception->getLine());
        }

    }

    public function edit(User $user, Role $role)
    {
        $roles = Role::get();
        $roleUser = $user->roles;
        return view('admin.user.edit', [
            'user' => $user,
            'roles' => $roles,
            'roleUser' => $roleUser,
        ]);
    }

    public function update(Request $request, User $user)
    {
        
        try {
            DB::beginTransaction();
             $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('users.index');

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('message' . $exception->getMessage() . '----Line: ' . $exception->getLine());
        }
    }

    public function delete(User $user) {
        return $this->deleteModelTrait($user, $user->id);
    }
}
