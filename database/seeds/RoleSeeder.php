<?php

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Administrador';
        $role->slug = 'admin';
        $role->description = 'Perfil para usuarios con acceso total';
        $role->special = 'all-access';
        $role->save();

        $role = new Role();
        $role->name = 'Medico';
        $role->slug = 'medic';
        $role->description = 'Perfil para medicos';
        $role->special = null;
        $role->save();

        $role = new Role();
        $role->name = 'Paciente';
        $role->slug = 'patient';
        $role->description = 'Perfil para usuarios registrados como pacientes';
        $role->special = 'no-access';
        $role->save();

        $role = new Role();
        $role->name = 'Secretaria/o';
        $role->slug = 'secretary';
        $role->description = 'Perfil de secretaria/o';
        $role->special = null;
        $role->save();
    }
}
