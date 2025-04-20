<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SuperheroesCollection extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
     public $collects = SuperheroesResource::class;
     public function toArray(Request $request):Array
     {
         return parent::toArray($this->collects);
     }
}
