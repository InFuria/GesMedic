<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'ci', 'name', 'username', 'email', 'phone', 'password', 'address', 'status', 'type_id'
    ];
}
