<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->string('search')->trim()->toString();
        $category = $request->string('category')->trim()->toString();

        $destinations = Destination::query()
            ->with('category')
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%");
                });
            })
            ->when($category !== '', function ($query) use ($category) {
                $query->whereHas('category', function ($query) use ($category) {
                    $query->where('name', $category);
                });
            })
            ->latest()
            ->get();

        return view('destinations.index', [
            'destinations' => $destinations,
            'categories' => Category::query()->orderBy('name')->get(),
            'search' => $search,
            'category' => $category,
        ]);
    }
}
