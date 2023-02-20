<?php

namespace App\Http\Controllers;

use App\Models\TravelPackages;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug)
    {
        $items = TravelPackages::with(['galleries'])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('detail', compact('items'));
    }
}
