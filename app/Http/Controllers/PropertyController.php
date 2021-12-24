<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function show(Property $property)
    {
        $media_all = Media::where('property_id', $property->id)->get();
        return view('property.single', compact('property', 'media_all'));
    }
}
