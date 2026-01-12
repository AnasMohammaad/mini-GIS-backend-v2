<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationCntroller extends Controller
{
    public function Store(Request $request) // add loction
    {
        Location::create([


            'name' => $request->name,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'category' => $request->category,
        ]);
        return response()->json(['message' => 'Location add successfully'], 200);
    }

    public function index() // see all locations
    {
        $locations = Location::all();
        return response()->json($locations);
    }

    public function show($id)
    {
        $location = Location::find($id);
        if ($location) {
            return response()->json($location);
        } else {
            return response()->json(['message' => 'Location not found'], 404);
        }
    }

    public function filter(Request $request) // see locations by category
    {

        $query = Location::query();

        if ($request->has('category')) {
            $query->where('category', $request->input('category'));
        }
        $locations = $query->get();

        // Check if the result is empty
        if ($locations->isEmpty()) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return response()->json($locations);
    }

    public function geojson() // get locations in geojson format 
    {
        // 1. Get all locations from the database
        $locations = Location::all();

        // 2. Transform each location into a GeoJSON "Feature"
        $features = $locations->map(function ($location) {
            return [
                'type' => 'Feature',
                'geometry' => [
                    'type' => 'Point',
                    // IMPORTANT: GeoJSON uses [Longitude, Latitude] order.
                    // We cast to (float) to ensure they are numbers, not strings.
                    'coordinates' => [
                        (float) $location->longitude,
                        (float) $location->latitude
                    ],
                ],
                'properties' => [
                    'name' => $location->name,
                    'description' => $location->description,
                    'category' => $location->category,
                    'id' => $location->id,
                ]
            ];
        });

        // 3. Return the final structure as JSON
        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $features
        ]);
    }
}
