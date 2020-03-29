<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeadApprovalResource extends JsonResource
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
            'bug_id' => $this->bug_id,
            'leadApproval_id' => $this->leadApproval_id,
            'firstLineSupport_id' => $this->firstLineSupport_id,
            'approval' => $this->approval,
            'reason' => $this->reason,
            'expected_fixing_date' => $this->expected_fixing_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'bug' => new BugResource($this->whenLoaded('bug'))
        ];
    }
}
