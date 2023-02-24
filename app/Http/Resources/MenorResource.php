<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $cuidador = CuidadorResource::collection($this->cuidadores);
        return [
            'id' => $this->id,
            'attributes' => parent::toArray($request)+[
                'cuidadores' => $cuidador
            ]
        ];
    }
}
