<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    public $timestamps = true;

    protected $table = 'roles';

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name'
    ];

    protected $casts = [
        'created_at'      =>  'timestamp',
        'updated_at'      =>  'timestamp',
        'deleted_at'      =>  'timestamp',
        'name'            =>  'string',
    ];
}