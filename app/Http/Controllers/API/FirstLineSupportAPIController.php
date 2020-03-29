<?php

namespace App\Http\Controllers\API;

use App\FirstLineSupport;
use App\Http\Resources\FirstLineSupportCollection;
use App\Http\Resources\FirstLineSupportResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FirstLineSupportAPIController extends Controller
{
    public function index()
    {
        return new FirstLineSupportCollection(FirstLineSupport::paginate());
    }
 
    public function show(FirstLineSupport $firstLineSupport)
    {
        return new FirstLineSupportResource($firstLineSupport->load(['bug']));
    }

    public function store(Request $request)
    {
        return new FirstLineSupportResource(FirstLineSupport::create($request->all()));
    }

    public function update(Request $request, FirstLineSupport $firstLineSupport)
    {
        $firstLineSupport->update($request->all());

        return new FirstLineSupportResource($firstLineSupport);
    }

    public function destroy(Request $request, FirstLineSupport $firstLineSupport)
    {
        $firstLineSupport->delete();

        return response()->noContent();
    }
}
