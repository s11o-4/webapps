<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genders extends Model
{
    protected $fillable = [
        'id',
        'gender'
    ];

    use HasFactory;
}
