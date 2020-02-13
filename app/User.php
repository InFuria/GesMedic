<?php

namespace App;

use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,  HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ci', 'name', 'username', 'email', 'phone', 'password', 'address', 'status', 'type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Return all User with the type 'Patient' */
    public static function patients(){

        $typeID = UserType::typeID('patient');

        $patients = User::whereRaw("type_id = {$typeID}")->get();

        return $patients;
    }

    public static function staff(){

        /*$admID = UserType::typeID('admin');*/
        $patientID = UserType::typeID('patient');

        $staff = User::join('users_type', 'users.type_id', '=', 'users_type.id')
            ->selectRaw("users.id as id, ci, users.name, username, status, type_id, email, description")
            ->whereRaw("type_id <> {$patientID}")
            ->get();

        return $staff;
    }
}
