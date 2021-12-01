<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    public $timestamps = true;

    protected $table = 'users';

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'firstname',
        'lastname',
        'username',
        'role_id',
        'email',
        'password',
        'mobile_phone',
        'status'
    ];

    protected $casts = [
        'created_at'      =>  'timestamp',
        'updated_at'      =>  'timestamp',
        'deleted_at'      =>  'timestamp',
        'firstname'       =>  'string',
        'lastname'        =>  'string',
        'username'        =>  'string',
        'role_id'         =>  'integer',
        'email'           =>  'string',
        'password'        =>  'string',
        'mobile_phone'    =>  'string',
        'status'          =>  'boolean',
    ];
}