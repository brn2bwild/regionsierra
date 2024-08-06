<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConvocationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'title' => $this->title,
                'file' => $this->getFirstMediaUrl(),
            ]
        ];
    }
}
