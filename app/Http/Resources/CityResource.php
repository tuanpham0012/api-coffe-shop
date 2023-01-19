<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
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
            'country_code' => $this->country_code,
            'name' => $this->name,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'zipcode' => $this->zipcode,
            'code' => $this->code,
            'country_id' => $this->country_id,
        ];
    }
}
