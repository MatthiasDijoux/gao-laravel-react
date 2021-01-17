<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdinateursResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $attributions = AttributionsResource::collection($this->attributions);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'attributions' => $attributions,
        ];
    }
}
