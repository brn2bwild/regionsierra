<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ConvocationCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'data' =>  $this->collection->transform(function ($convocation){
                return [
                    'title' => $convocation->title,
                    'slug' => $convocation->slug,
                ];
            })
        ];
    }
}
