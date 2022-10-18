<?php

namespace App\Fiscality\IncomeExpenses\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IncomeExpenseResource extends JsonResource
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
            'account'=>$this->account,
            'name'=>$this->name,
            'type'=>$this->type,
        ];
    }
}
