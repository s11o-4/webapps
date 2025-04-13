<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Superheroes extends Model
{
    use HasFactory;
    public function universe()
    {
        return $this->belongsTo(Universes::class,'universe_id');
    }
}
