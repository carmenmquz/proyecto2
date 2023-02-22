<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CuidadorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'attributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'direction' => $this->direction,
                'tlf' => $this->tlf,
                'tipo' => $this->tipo,
                'tarifa' => $this->tarifa,
                'valoration' => $this->valoration,
                'user_id' => $this->user_id,
                'user' => new UserResource($this->user),
            ]
        ];
    }
}
