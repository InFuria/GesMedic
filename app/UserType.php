<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{

    protected $table = 'users_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'description'
    ];

    /** Return the id for the type selected */
    public static function typeID($slug){

        $id = UserType::where('slug', $slug)->first()->id;

        return $id;
    }

    public static function list(){

        $types = UserType::all()->pluck('description', 'id');

        return $types;
    }
}
