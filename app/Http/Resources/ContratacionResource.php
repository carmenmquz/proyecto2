<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContratacionResource extends JsonResource
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
                'tutor_id' => $this->tutor_id,
                'tutor' => new TutorResource($this->tutor),
                'cuidador_id' => $this->cuidador_id,
                'cuidador' => new CuidadorResource($this->cuidador),
                'menor_id' => $this->menor_id,
                'menor' => new MenorResource($this->menor),
                'fecha_inicio' => $this->fecha_inicio,
                'fecha_fin' => $this->fecha_fin,
            ]
        ];
    }

}
