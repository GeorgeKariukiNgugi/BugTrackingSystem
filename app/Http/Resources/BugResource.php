<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BugResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'decription' => $this->decription,
            'expectation' => $this->expectation,
            'dateNoticed' => $this->dateNoticed,
            'software' => $this->software,
            'reporter_id' => $this->reporter_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'evidences' => new EvidenceCollection($this->whenLoaded('evidences'))
        ];
    }
}
