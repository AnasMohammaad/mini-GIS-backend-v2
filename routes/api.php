<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/locations/geojson', [App\Http\Controllers\LocationCntroller::class, 'geojson']);

Route::post('/locations', [App\Http\Controllers\LocationCntroller::class, 'Store']);

Route::get('/locations', [App\Http\Controllers\LocationCntroller::class, 'index']);

Route::get('/locations/category-summary', [App\Http\Controllers\LocationCntroller::class, 'categorySummary']);

Route::get('/locations/{id}', [App\Http\Controllers\LocationCntroller::class, 'show']);

Route::get('/locations', [App\Http\Controllers\LocationCntroller::class, 'filter']);
