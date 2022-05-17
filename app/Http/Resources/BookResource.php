<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|
     */
    public function toArray($request)
    {
        return [
          'id' => $this->id,
          'title' => $this->title,
          'category_id' => $this->category_id,
          'price' => $this->price,
            'user_id' => $this->user_id,
            'publish_date' => $this->publish_date,
            'created_at' => $this->created_at,
            'status' =>$this->status,
        ];
    }
}
