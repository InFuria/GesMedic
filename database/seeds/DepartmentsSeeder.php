<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new Department();
        $department->name = 'Alto Paraguay';
        $department->save();

        $department = new Department();
        $department->name = 'Alto Paraná';
        $department->save();

        $department = new Department();
        $department->name = 'Amambay';
        $department->save();

        $department = new Department();
        $department->name = 'Boquerón';
        $department->save();

        $department = new Department();
        $department->name = 'Caaguazú';
        $department->save();

        $department = new Department();
        $department->name = 'Caazapá';
        $department->save();

        $department = new Department();
        $department->name = 'Canindeyú';
        $department->save();

        $department = new Department();
        $department->name = 'Central';
        $department->save();

        $department = new Department();
        $department->name = 'Concepción';
        $department->save();

        $department = new Department();
        $department->name = 'Cordillera';
        $department->save();

        $department = new Department();
        $department->name = 'Guairá';
        $department->save();

        $department = new Department();
        $department->name = 'Itapúa';
        $department->save();

        $department = new Department();
        $department->name = 'Misiones';
        $department->save();

        $department = new Department();
        $department->name = 'Ñeembucú';
        $department->save();

        $department = new Department();
        $department->name = 'Paraguarí';
        $department->save();

        $department = new Department();
        $department->name = 'Presidente Hayes';
        $department->save();

        $department = new Department();
        $department->name = 'San Pedro';
        $department->save();
    }
}
