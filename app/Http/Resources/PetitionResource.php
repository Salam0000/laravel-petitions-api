<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // this is what will be retyrn to the user when they hit the api endpoint
        return [
            'id' => $this->id,
            'title' => ucwords($this->title),
            'author' => $this->author,
            'description' => $this->description,
            'category' => $this->category,
            'signees' => $this->signees,
        ];
    }
}
