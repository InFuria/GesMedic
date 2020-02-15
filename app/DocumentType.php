<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    public $timestamps = false;
    protected $table = 'documents_type';

    /** To selectize */
    public static function list(){

        $list = DocumentType::select('name', 'id')->get();

        return $list;
    }
}
