<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $table = 'students';
    protected $guard = 'student';

    protected $fillable = [
        'name',
        'nis',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
