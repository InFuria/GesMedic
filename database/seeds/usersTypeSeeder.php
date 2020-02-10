<?php

use App\UserType;
use Illuminate\Database\Seeder;

class userTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new UserType();
        $type->slug= 'admin';
        $type->description = 'Administrador';
        $type->save();

        $type = new UserType();
        $type->slug= 'doctor';
        $type->description = 'Medico';
        $type->save();

        $type = new UserType();
        $type->slug= 'patient';
        $type->description = 'Paciente';
        $type->save();

        $type = new UserType();
        $type->slug= 'nurse';
        $type->description = 'Enfermera';
        $type->save();

        $type = new UserType();
        $type->slug= 'director';
        $type->description = 'Director';
        $type->save();

        $type = new UserType();
        $type->slug= 'cleaner';
        $type->description = 'Limpiador';
        $type->save();
    }
}
