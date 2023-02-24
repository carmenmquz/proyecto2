<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
        $tutor = $this->tutor;
        $name = $tutor ? $tutor->first_name . ' ' . $tutor->last_name : $this->name;
        return [
            'id' => $this->id,
            'attributes' => [
                'name' => $name,
                'email' => $this->email,
                'roles' => RoleResource::collection($this->roles)
            ]
        ];
    }
}
