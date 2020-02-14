<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Department;
use App\Http\Requests\BranchRequest;
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
                ->selectRaw("branches.id as id, code, department_id, branches.name as name, address, phone")
                ->get();

            $departmentName = null;
            $departments = null;

            if (count($branches) === 1)
                $departmentName = Department::name($branches[0]->department_id);

            else
                $departments = Department::pluck('name');

            return view('branches.index', compact('branches', 'departmentName', 'departments'));

        } catch (Exception $e) {
            Log::error('BranchesController::index - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    public function create()
    {
        try {
            $departments = Department::list();

            return view('branches.create', compact('departments'));

        } catch (Exception $e) {
            Log::error('BranchesController::create - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    public function store(BranchRequest $request)
    {
        try {

            $branch = Branch::create($request->except(['_token']));

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

        } catch (Exception $e) {
            Log::error('BranchesController::edit - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    public function edit(Branch $branch)
    {
        try {

            $departments = Department::list();

            return view('branches.edit', compact('departments', 'branch'));

        } catch (Exception $e) {
            Log::error('BranchesController::edit - ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al cargar la pagina, contacte a Soporte.');
        }
    }

    public function update(BranchRequest $request, Branch $branch)
    {
        try {

            $branch->update($request->except(['_token']));

            return redirect()->action('BranchesController@index')->with('success', "Se ha actualizar la sucursal con exito!");

        } catch (\Exception $e) {
            Log::error('BranchesController::update ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al actualizar la sucursal.');
        }
    }

    public function destroy(Branch $branch)
    {
        try {
            $branch->delete();

            return redirect()->back()->with('success', "Se ha eliminado la sucursal con exito!");

        } catch (\Exception $e) {
            Log::error('BranchesController::destroy ' . $e->getMessage(), ['error_line' => $e->getLine()]);
            return redirect()->back()->with('error', 'Ha ocurrido un error al eliminar la sucursal.');
        }
    }
}
