<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name'
            ]
        ]);
        
        Role::create($request->all());

        return redirect()->route('roles.index')->with('status','Rol creado creado exitosamente...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update($request->all());
        return redirect()->route('roles.index')->with('status','Rol actualizado exitosamente...!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $role = Role::find($id)->delete();
        return back()->with('status','Rol eliminado correctamente...');
    }

    /**
     * Add the specified permission.
     */
    public function addpermission($id)
    {
        $permissions = Permission::all();
        $role = Role::findOrFail($id);
        $rolePermissions = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $role->id)->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();
        return view('role.addpermission', compact('role', 'permissions', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatepermission(Request $request, $id)
    {
        $request->validate([
            'permission' => 'required'
        ]);
        $role = Role::findOrFail($id);
        $role->syncPermissions($request->permission);
        
        return back()->with('status','Permission agregado correctamente...');
    }
}
