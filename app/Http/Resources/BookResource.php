<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'is_read' => $this->is_read,
            'ebook' => $this->ebook,
            'purchase_date' => $this->purchase_date->format('d/m/Y'),
            'price' => $this->price,
            'author' => $this->author->name,
        ];
    }
}
