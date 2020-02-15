<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public static function list(){

        $list = Country::all()->pluck('name', 'id');

        return $list;
    }

    public static function name($id){

        $name = Country::where('id', $id)->first()->name;

        return $name;
    }

    public static function getID($name){

        $id = Country::whereRaw("name = '{$name}'")->first()->id;

        return $id;
    }
}
