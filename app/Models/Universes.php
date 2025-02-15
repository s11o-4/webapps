<?php

namespace App\Models;

use App\Models\Superheroes;

use Illuminate\Database\Eloquent\Model;

class Universes extends Model
{
    public function superheroes()
    {
        return $this->hasMany(Superheroes::class,'superhero_id');
    }
}
