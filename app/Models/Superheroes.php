<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Superheroes extends Model {

    use HasFactory;

    protected $fillable = [
        'universe_id',
        'real_firstname',
        'real_lastname',
        'alter_ego',
        'superpower',
        'age'
    ];

    public function universe()
    {
        return $this->belongsTo(Universes::class,'universe_id');
    }
}
