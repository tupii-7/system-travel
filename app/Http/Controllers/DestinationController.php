<?php

namespace App\Http\Controllers;

use App\Models\Destination;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::with('category')->get();

        return view('destinations.index', compact('destinations'));
    }
}