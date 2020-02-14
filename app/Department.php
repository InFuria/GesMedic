<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public static function list(){

        $list = Department::all()->pluck('name', 'id');

        return $list;
    }

    public static function name($id){

        $name = Department::where('id', $id)->first()->name;

        return $name;
    }

    public static function getID($name){

        $id = Department::whereRaw("name = '{$name}'")->first()->id;

        return $id;
    }
}
