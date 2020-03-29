<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
* Snippet for a quick route reference
*/
Route::get('/', function (Router $router) {
    return collect($router->getRoutes()->getRoutesByMethod()["GET"])->map(function($value, $key) {
        return url($key);
    })->values();   
});

Route::apiResource('bugs', '\App\Http\Controllers\API\BugAPIController');

Route::apiResource('firstLineSupports', '\App\Http\Controllers\API\FirstLineSupportAPIController');

Route::apiResource('leadApprovals', '\App\Http\Controllers\API\LeadApprovalAPIController');

Route::apiResource('evidences', '\App\Http\Controllers\API\EvidenceAPIController');

Route::apiResource('users', '\App\Http\Controllers\API\UserAPIController');