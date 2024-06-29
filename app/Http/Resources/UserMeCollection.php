<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserMeCollection extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $request['asUnitLeader'] = $this->asUnitLeader;

        $request['souls'] = $this->souls;
        $request['report'] = $this->report;
        $request['assigned'] = $this->assigned;

        $request['homecellLeader'] = $this->homecellLeaders;

        $request['station'] = $this->station;
        return parent::toArray($request);
    }
}
