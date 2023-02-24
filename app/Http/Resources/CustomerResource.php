<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            // 'attributes' => parent::toArray($request)
            'attributes' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'job_title' => $this->job_title,
                'city' => $this->city,
                'country' => $this->country,
                'user_id' => $this->user_id,
                'user' => new UserResource($this->user),
                'orders' => OrderResource::collection($this->orders),
            ]
        ];
    }
}
