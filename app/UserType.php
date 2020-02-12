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
}
