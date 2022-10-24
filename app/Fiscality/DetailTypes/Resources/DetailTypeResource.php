<?php

namespace App\Fiscality\DetailTypes\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetailTypeResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'code'=>$this->code,
            'category'=>$this->category,
            'base'=>$this->base,
            'typeImpot'=>$this->typeImpot,
            'taux'=>$this->taux,
            'description'=>$this->description,
            'article'=>$this->article,
        ];
    }
}
