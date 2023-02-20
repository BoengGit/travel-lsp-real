<?php

namespace App\Http\Controllers;

use App\Models\TravelPackages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = TravelPackages::with(['galleries'])->get();
        return view('welcome', compact('items'));
    }
}
