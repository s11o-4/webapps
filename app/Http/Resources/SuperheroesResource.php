<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SuperheroesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'superpower' => $this->alter_ego,
            'firstname' => $this->real_firstname,
            'lastname' => $this->real_lastname,
            'age' => $this->age,
            'universe' => $this->universe->name,
        ];
    }
}
