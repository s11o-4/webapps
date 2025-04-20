<?php

namespace App\Models;

use App\Models\Superheroes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Universes extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'type'
    ];
    use HasFactory;
    public function superheroes()
    {
        return $this->hasMany(Superheroes::class,'superhero_id');
    }
}
