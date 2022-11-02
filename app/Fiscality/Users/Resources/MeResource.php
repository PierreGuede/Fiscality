<?php

namespace App\Fiscality\Users\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeResource extends JsonResource
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
            'user_id' => $this->id,
            'username' => $this->username,
            'name' => $this->name,
            'firstname' => $this->firstname,
            'email' => $this->email,
            'email_verified' => is_null($this->email_verified_at) ? false : true,
            'created_by' => isset($this->user_id) ? $this->user_id : null,
            'type_Pack' => isset($this->myPack->packs->name) ? $this->myPack->packs->name : null,
        ];
    }
}
