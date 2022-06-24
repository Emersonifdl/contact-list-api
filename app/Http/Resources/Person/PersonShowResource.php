<?php

namespace App\Http\Resources\Person;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonShowResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
