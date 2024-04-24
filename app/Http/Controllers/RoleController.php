<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    use HasRoles;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $all_users_with_all_their_roles = User::with('roles')->get();
        foreach($all_users_with_all_their_roles as $useRole) {
            $a = $useRole->getRoleNames();

        } */
        $user = User::first();
        $users = DB::table('users')->where('email','mainhead@gmail.com')->get();
        $admin = $user->hasRole('admin');
        $permis = $user->hasDirectPermission('create user');
        $a = $user->getRoleNames();
        $c = $a->all();
        $roles = Role::all();
        $role = Role::where('name','admin')->get();
        foreach($role as $r) {
            $b = $r;
        }
        $permission = Permission::all();
        return view('livewire.pages.role.role', ['roles' => $roles->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
