<?php

use App\Branch;
use App\Department;
use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'code', 'department_id', 'name', 'address', 'phone'
        $branch = new Branch();
        $branch->code = 101;
        $branch->department_id = Department::getID('Alto Parana');
        $branch->name = 'Central';
        $branch->address = 'Supercarretera y Cuerpo de Bomberos';
        $branch->phone = '0994696998';
    }
}
