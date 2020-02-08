<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use Exception;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PermissionController extends Controller
{

    public function index()
    {
        try {

            $permissions = Permission::all();

            return view('permissions.index', compact('permissions'));

        } catch (Exception $e){
            Log::error('PermissionController::index - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }


    public function create()
    {
        try {

            return view('permissions.create');

        } catch (Exception $e){
            Log::error('PermissionController::create - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }


    public function store(PermissionRequest $request)
    {
        try {

            $permission = Permission::create($request->except(['_token']));

            return redirect()->back()->with('success', 'Exito!');
        } catch (Exception $e){
            Log::error('PermissionController::store - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al crear el permiso, contacte a Soporte.');
        }
    }


    public function show(Permission $permission)
    {
        try {

            $roles = \DB::table('permission_role')->join('permissions', 'permission_role.permission_id', '=', 'permissions.id')
            ->whereRaw("permission_role.permission_id = {$permission->id}")->get();

            return view('permissions.show', compact('permission', 'roles'));

        } catch (Exception $e){
            Log::error('PermissionController::show - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }


    public function edit(Permission $permission)
    {
        try {

            return view('permissions.edit', compact('permission'));

        } catch (Exception $e){
            Log::error('PermissionController::edit - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }


    public function update(PermissionRequest $request, Permission $permission)
    {
        try {

            $permission->update($request->except(['_token']));
            $permission->save();

            return redirect()->back()->with('success', 'Exito!');
        } catch (Exception $e){
            Log::error('PermissionController::update - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al actualizar el permiso, contacte a Soporte.');
        }
    }


    public function destroy(Permission $permission)
    {
        try {
            
            $permission->delete();

            return redirect()->back()->with('success', 'Exito!');
        } catch (Exception $e){
            Log::error('PermissionController::destroy - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al eliminar el permiso, contacte a Soporte.');
        }
    }
}
