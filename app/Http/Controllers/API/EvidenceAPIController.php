<?php

namespace App\Http\Controllers\API;

use App\Evidence;
use App\Http\Resources\EvidenceCollection;
use App\Http\Resources\EvidenceResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvidenceAPIController extends Controller
{
    public function index()
    {
        return new EvidenceCollection(Evidence::paginate());
    }
 
    public function show(Evidence $evidence)
    {
        return new EvidenceResource($evidence->load(['bug']));
    }

    public function store(Request $request)
    {
        return new EvidenceResource(Evidence::create($request->all()));
    }

    public function update(Request $request, Evidence $evidence)
    {
        $evidence->update($request->all());

        return new EvidenceResource($evidence);
    }

    public function destroy(Request $request, Evidence $evidence)
    {
        $evidence->delete();

        return response()->noContent();
    }
}
