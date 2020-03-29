<?php

namespace App\Http\Controllers\API;

use App\Bug;
use App\Http\Resources\BugCollection;
use App\Http\Resources\BugResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BugAPIController extends Controller
{
    public function index()
    {
        return new BugCollection(Bug::paginate());
    }
 
    public function show(Bug $bug)
    {
        return new BugResource($bug->load(['evidences']));
    }

    public function store(Request $request)
    {
        return new BugResource(Bug::create($request->all()));
    }

    public function update(Request $request, Bug $bug)
    {
        $bug->update($request->all());

        return new BugResource($bug);
    }

    public function destroy(Request $request, Bug $bug)
    {
        $bug->delete();

        return response()->noContent();
    }
}
