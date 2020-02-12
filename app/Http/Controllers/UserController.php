<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use App\UserType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function index()
    {
        try {

            $users = User::join('type_user', 'users.type_id', '=', 'type_user.id')
                ->selectRaw("users.id as id, ci, users.name, username, status, type_id, email, description")
                ->get();

            return view('users.index', compact('users', 'types'));

        } catch (Exception $e){
            Log::error('UsersController::index - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    
    public function create()
    {
        try {
            $types = UserType::all()->pluck('description', 'id');

            return view('users.create', compact('types'));

        } catch (Exception $e){
            Log::error('UsersController::create - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    
    public function store(UserRequest $request)
    {
        try {

            $user = User::create([
                'ci' => $request->ci,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'type_id' => $request->type_id,
                'status' => 1
            ]);

            return redirect()->route('users.index')->with('success', 'Se ha registrado al usuario correctamente!');

        } catch (Exception $e){
            Log::error('UsersController::store - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al procesar el registro, contacte a Soporte.');
        }
    }

    
    public function show(User $user)
    {
        try {
            $type = UserType::find($user->type_id);

            return view('users.show', compact('type', 'user'));

        } catch (Exception $e){
            Log::error('UsersController::edit - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    
    public function edit(User $user)
    {
        try {
            $types = UserType::all()->pluck('description', 'id');

            return view('users.edit', compact('types', 'user'));

        } catch (Exception $e){
            Log::error('UsersController::edit - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy(User $user)
    {
        try{

            $user->delete();

            return redirect()->back()->with('success', "Se ha eliminado el usuario con exito!");

        } catch (\Exception $e){
            Log::error('UserController::destroy ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al eliminar el usuario.');
        }
    }

    public function ban(User $user)
    {
        try{

            $user->status = $user->status == 1 ? 0 : 1;
            $user->save();

            return redirect()->back()->with('success', "El estado del usuario $user->username ha sido modificado con exito!");

        } catch (\Exception $e){
            Log::error('UserController::ban ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al actualizar el estado del usuario.');
        }
    }
}
