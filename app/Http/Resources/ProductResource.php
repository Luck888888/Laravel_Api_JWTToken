<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'category' => $this->category,
            'external_id' => $this->external_id,
            'created_at' => Carbon::parse($this['created_at'])->format('Y-m-d H:i:s'),
            'categories' => ProductCategoryResource::collection($this->categories),
        ];
    }
}
