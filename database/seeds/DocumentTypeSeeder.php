<?php

use App\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new DocumentType();
        $type->name = 'Cédula Paraguaya';
        $type->save();

        $type = new DocumentType();
        $type->name = 'Documento Extranjero';
        $type->save();

        $type = new DocumentType();
        $type->name = 'Pasaporte';
        $type->save();
    }
}
