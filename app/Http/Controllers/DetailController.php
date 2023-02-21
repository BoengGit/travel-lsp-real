<?php

namespace App\Http\Controllers;

use App\Models\TravelPackages;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug)
    {
        $item = TravelPackages::with(['galleries'])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('detail', compact('item'));
    }
}
