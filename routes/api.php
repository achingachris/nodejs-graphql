<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// GET Routes
Route::get('/routes', function() {
    return response()->json([
        'routes' => App\Models\Routes::all()
    ]);
});

// POST Routes
Route::post('/routes', function(Request $request) {
    $route = new App\Models\Routes;
    $route->destination_1 = $request->destination_1;
    $route->destination_2 = $request->destination_2;
    $route->distance = $request->distance;
    $route->save();
    return response()->json([
        'message' => 'Route created successfully',
        'route' => $route
    ]);
});


