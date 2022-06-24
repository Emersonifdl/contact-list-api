<?php

namespace App\Http\Resources\Person;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonIndexResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'avatar'      => $this->avatar,
            'is_favorite' => $this->is_favorite,
        ];
    }
}
