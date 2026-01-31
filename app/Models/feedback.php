<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'admin_id',
        'information',
    ];
    //
}
