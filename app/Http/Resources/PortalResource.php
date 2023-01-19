<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PortalResource extends JsonResource
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
            'name' => $this->name,
            'code' => $this->code,
            'tax_code' => $this->tax_code,
            'city_id' => $this->city_id,
            'city' => new CityResource($this->city),
            'district_id' => $this->district_id,
            'district' => new DistrictResource($this->district),
            'ward_id' => $this->ward_id,
            'ward' => new WardResource($this->ward),
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'website' => $this->website,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'morning_start' => $this->morning_start,
            'morning_end' => $this->morning_end,
            'afternoon_start' => $this->afternoon_start,
            'afternoon_end' => $this->afternoon_end,
            'night_start' => $this->night_start,
            'night_end' => $this->night_end,
            'start_date' => $this->start_date,
        ];
    }
}
