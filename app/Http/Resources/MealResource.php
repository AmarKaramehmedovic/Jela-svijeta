<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MealResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'category' => $this
                ->when(str_contains($request->with, 'category'),
                    $this->category
                ),
            'tags' => $this
                ->when(str_contains($request->with, 'tags'),
                    $this->tags
                ),
            'ingredients' => $this
                ->when(str_contains($request->with, 'ingredients'),
                    $this->ingredients
                ),
        ];
    }
}
