<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'isbn' => $this->isbn,
            // 'authors' => [
            //     $this->authors,
            // ],
            'authors' => explode(',', $this->authors),
            'number_of_pages' => $this->numberOfPages,
            'publisher' => $this->publisher,
            'country' => $this->country,
            'release_date' => $this->released,
        ];
    }
}
