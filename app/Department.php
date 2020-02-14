<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function list(){

        $list = Department::all()->pluck('name', 'id');

        return $list;
    }

    public static function name($id){

        $name = Department::where('id', $id)->first()->name;

        return $name;
    }
}
