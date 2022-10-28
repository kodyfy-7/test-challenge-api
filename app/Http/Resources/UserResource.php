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
        //return parent::toArray($request);
        return [
            'id' => (string)$this->id,
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
            // 'relationships' => [
            //     'id'=> (string)$this->user->id,
            //     'User name' => $this->user->name,
            //     'User email' => $this->user->email
            // ]
        ];
    }
}
