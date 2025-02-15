<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superheroes extends Model
{
    public function universe()
    {
        return $this->belongsTo(Universes::class,'universe_id');
    }
}
