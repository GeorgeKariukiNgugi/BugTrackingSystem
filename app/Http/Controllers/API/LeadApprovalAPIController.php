<?php

namespace App\Http\Controllers\API;

use App\LeadApproval;
use App\Http\Resources\LeadApprovalCollection;
use App\Http\Resources\LeadApprovalResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeadApprovalAPIController extends Controller
{
    public function index()
    {
        return new LeadApprovalCollection(LeadApproval::paginate());
    }
 
    public function show(LeadApproval $leadApproval)
    {
        return new LeadApprovalResource($leadApproval->load(['bug']));
    }

    public function store(Request $request)
    {
        return new LeadApprovalResource(LeadApproval::create($request->all()));
    }

    public function update(Request $request, LeadApproval $leadApproval)
    {
        $leadApproval->update($request->all());

        return new LeadApprovalResource($leadApproval);
    }

    public function destroy(Request $request, LeadApproval $leadApproval)
    {
        $leadApproval->delete();

        return response()->noContent();
    }
}
