<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public static function getID($name){

        $id = Department::whereRaw("name = '{$name}'")->first()->id;

        return $id;
    }
}
