<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Http\Requests\RoleRequest;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{

    public function index()
    {
        try {

            $roles = Role::all();

            return view('roles.index', compact('roles'));

        } catch (\Exception $e){
            Log::error('RoleController::index - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }


    public function create()
    {
        try {

            $permissions = Permission::all();

            return view('roles.create', compact('permissions'));

        } catch (\Exception $e){
            Log::error('RoleController::create - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }


    public function store(RoleRequest $request)
    {
        try {

            if(! isset($request->special))
                $request->special = null;

            $role = Role::create(['name' => $request->name, 'slug' => $request->slug, 'description' => $request->description, 'special' => $request->special]);

            if(isset($request->permissions))
                $role->permissions()->sync($request->get('permissions'));

            return redirect()->back()->with('success', 'Se ha guardado el rol!');

        } catch (\Exception $e){
            Log::error('RoleController::store - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al crear el rol, contacte a Soporte.');
        }
    }


    public function show(Role $role)
    {
        try {

            return view('roles.show', compact('role'));

        } catch (\Exception $e){
            Log::error('RoleController::show - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }


    public function edit(Role $role)
    {
        try {

            $permissions = Permission::all();

            return view('roles.edit' , compact('role', 'permissions'));

        } catch (\Exception $e){
            Log::error('RoleController::edit - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }


    public function update(RoleRequest $request, Role $role)
    {
        try {

            if(! isset($request->special))
                $request->special = null;

            $role->update(['name' => $request->name, 'slug' => $request->slug, 'description' => $request->description, 'special' => $request->special]);

            if(isset($request->permissions))
                $role->permissions()->sync($request->get('permissions'));

            return redirect()->back()->with('success', 'Se ha actualizado el rol!');

        } catch (\Exception $e){
            Log::error('RoleController::update - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al actualizar el rol, contacte a Soporte.');
        }
    }


    public function destroy(Role $role)
    {
        try {

            $role->delete();

            return redirect()->back()->with('success', "Se ha eliminado el rol con exito!");

    } catch (\Exception $e){
        Log::error('RoleController::destroy - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
        return redirect()->back()->with('error', 'Ha ocurrido un error al borrar el rol, contacte a Soporte.');
    }
    }
}
