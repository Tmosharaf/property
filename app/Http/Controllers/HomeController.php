<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $properties = Property::latest()->take(3)->get();

        return view('welcome', compact('properties'));
    }
}
