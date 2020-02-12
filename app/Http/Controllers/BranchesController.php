<?php

namespace App\Http\Controllers;

use App\Branch;
use App\department;
use App\User;
use App\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class BranchesController extends Controller
{
    public function index()
    {
        try {

            $branches = Branch::join('departments', 'branches.department_id', '=', 'departments.id')
                ->selectRaw("branches.id as id, code, department_id as department, branches.name as name, address, phone")
                ->get();


            return view('branches.index', compact('branches'));

        } catch (Exception $e) {
            Log::error('BranchesController::index - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    public function create()
    {
        try {
            $departments = department::all()->pluck('name', 'id');

            return view('branches.create', compact('departments'));

        } catch (Exception $e) {
            Log::error('BranchesController::create - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    public function store(Request $request)
    {
        try {

            $branch = Branch::create([
                'code' => $request->code,
                'department_id' => $request->department_id,
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);

            return redirect()->route('branches.index')->with('success', 'Se ha registrado la sucursal correctamente!');

        } catch (Exception $e) {
            Log::error('BranchesController::store - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al procesar el registro, contacte a Soporte.');
        }
    }

    public function show(Branch $branch)
    {
        try {
            $department = Department::find($branch->department_id);

            return view('branches.show', compact('department', 'branch'));

        } catch (Exception $e){
            Log::error('BranchesController::edit - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    public function edit(Branch $branch)
    {
        try {
            $department = UserType::all()->pluck('description', 'id');

            return view('branches.edit', compact('department', 'branch'));

        } catch (Exception $e){
            Log::error('BranchesController::edit - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Branch $branch)
    {
        try{
            $branch->delete();

            return redirect()->back()->with('success', "Se ha eliminado la sucursal con exito!");

        } catch (\Exception $e){
            Log::error('BranchesController::destroy ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al eliminar la sucursal.');
        }
    }
}
