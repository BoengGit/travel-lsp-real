<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TravelPackageRequest;
use App\Models\TravelPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travel_packages = TravelPackages::all();
        return view('admin.travel_packages.index', compact('travel_packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.travel_packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TravelPackages::create($data);
        return redirect()->route('admin.travel-packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TravelPackages $travel_package)
    {
        return view('admin.travel_packages.show', compact('travel_package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TravelPackages $travel_package)
    {
        return view('admin.travel_packages.edit', compact('travel_package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, TravelPackages $travel_package)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = $travel_package;

        $item->update($data);

        return redirect()->route('admin.travel-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravelPackages $travel_package)
    {
        $travel_package->delete();

        return to_route('admin.travel-packages.index');
    }
}
