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
        $customer = $this->customer;
        $name = $customer
              ? $customer->first_name . ' ' . $customer->locale_get_display_name
              : $this->name;
        return [
            'id' => $this->id,
            'attributes' => [
                'name' => $name,
                'email' => $this->email,
                // 'customer' => new CustomerResource($this->customer)
                ]
            ];
    }
}
