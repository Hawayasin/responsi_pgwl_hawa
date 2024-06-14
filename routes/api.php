<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PointController;
use App\Http\Controllers\PolylineController;
use App\Http\Controllers\PolygonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//create GeoJSON point(s)
Route::get('/points', [PointController::class, 'index'])-> name('api.points');
//create GeoJSON point(s)
Route::get('/polylines', [PolylineController::class, 'index'])-> name('api.polylines');
//create GeoJSON point(s)
Route::get('/polygons', [PolygonController::class, 'index'])-> name('api.polygons');

//GeoJSON Point
Route::get('/point/{id}', [PointController::class, 'show'])-> name('api.point');

//GeoJSON Polyline
Route::get('/polyline/{id}', [PolylineController::class, 'show'])-> name('api.polyline');

//GeoJSON Polygon
Route::get('/polygon/{id}', [PolygonController::class, 'show'])-> name('api.polygon');
