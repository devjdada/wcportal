<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SoulCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {

        $request['winner'] = $this->winner;
        $request['report'] = $this->report;
        $request['assigned'] = $this->assigned;
        return parent::toArray($request);
    }
}
