<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserCollection extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $request['unit'] = $this->unit;
        $request['unitLeader'] = $this->unitLeader;
        // $request['avatar'] = $this->avatar;
        $request['souls'] = $this->souls;
        $request['report'] = $this->report;
        $request['assigned'] = $this->assigned;
        $request['homecell'] = $this->homecell;
        $request['homecellLeader'] = $this->homecellLeaders;
        // $request['staff'] = $this->staff;
        $request['station'] = $this->station;
        return parent::toArray($request);
    }
}
