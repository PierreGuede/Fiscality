<?php

namespace App\Fiscality\RADetails\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RADetailResource extends JsonResource
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
            'name' => $this->name,
        ];
    }
}
