<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomecellCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $request['district'] = $this->district;
        $request['province'] = $this->province;
        $request['leaders'] = $this->leaders;

        return parent::toArray($request);
    }
}
