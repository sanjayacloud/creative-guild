<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotographerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->only([
            'first_name',
            'last_name',
            'phone',
            'email',
            'bio',
            'profile_picture',
            'album'
        ]);
    }
}
