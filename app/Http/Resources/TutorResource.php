<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TutorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
                'imagen' => $this->imagen,
                'pais' => $this->pais,
                'ciudad' => $this->ciudad,
                'sexo' => $this->sexo,
                'telefono' => $this->telefono,
                'user_id' => $this->user_id,
                'user' => new UserResource($this->user),
            ]
        ];
    }
}
