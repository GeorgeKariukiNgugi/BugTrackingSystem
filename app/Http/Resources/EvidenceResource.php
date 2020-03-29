<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EvidenceResource extends JsonResource
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
            'loaction_pointer' => $this->loaction_pointer,
            'bug_id' => $this->bug_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'bug' => new BugResource($this->whenLoaded('bug'))
        ];
    }
}
