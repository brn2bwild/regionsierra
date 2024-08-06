<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UpdateCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->transform(function ($update) {
                return [
                    'name' => $update->name,
                    'slug' => $update->slug,
                    'image' => $update->getFirstMediaUrl('images'),
                ];
            }),
        ];
    }
}
