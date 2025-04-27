<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'id',
        'file_name',
        'description',
        'file'
    ];
}
