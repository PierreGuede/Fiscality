<?php

namespace App\Fiscality\Packs\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackResource extends JsonResource
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
            'user'=>$this->user,
            'name'=>$this->name,
            'theuser'=>$this->theuser,
        ];
    }
}
