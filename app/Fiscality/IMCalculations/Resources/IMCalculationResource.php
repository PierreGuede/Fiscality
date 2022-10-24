<?php

namespace App\Fiscality\IMCalculations\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IMCalculationResource extends JsonResource
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
            'name'=>$this->name,
        ];
    }
}
