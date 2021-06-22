<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class CategoryResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category_id' => $this->category_id,
            'external_id' => $this->external_id,
            'created_at' => Carbon::parse($this['created_at'])->format('Y-m-d'),
            'products' => CategoryProductResource::collection($this->products),
        ];
    }
}
