<?php

namespace App\Fiscality\Companies\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'ifu' => $this->ifu,
            'path' => $this->path,
            'rccm' => $this->rccm,
            'path_rccm' => $this->patch_rccm,
            'created_date' => $this->created_date,
            'email' => $this->email,
            'celphone' => $this->celphone,
            'taxCenter' => $this->taxCenter,
            'typeCompany' => $this->typeCompany,
            'domain' => $this->domain,
            'user' => $this->user,
            'status' => 'En fonction' ?? $this->status == 'approuved',
        ];
    }
}
